<?php
session_start();

// initializing variables
$id = 0;
$username = "";
$email    = "";
$phone_number = "";
$ID_number = "";
$employee_number = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $ID_number = mysqli_real_escape_string($db, $_POST['ID']);
    $employee_number = mysqli_real_escape_string($db, $_POST['employee']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled in ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($phone_number)) { array_push($errors, "Phone number is required"); }
    if (empty($ID_number)) { array_push($errors, "ID number is required"); }
    if (empty($employee_number)) { array_push($errors, "Employee ID is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "Passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }

//        if ($user['ID'] === $ID_number) {
//            array_push($errors, "ID already exists");
//        }
//
//        if ($user['employee'] === $employee_number) {
//            array_push($errors, "Employee ID already exists");
//        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, phone_number, ID_number, employee_number, password) 
  			  VALUES('$username', '$email', '$phone_number', '$ID_number', '$employee_number', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: superuser.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: Admin_Dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
