<?php
session_start();

// initializing variables
$firstname = "";
$surname    = "";
$email ="";
$cell = "";
$subject = "";
$time = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER Tutor
if (isset($_POST['reg_tutor'])) {
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['first_name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $cell = mysqli_real_escape_string($db, $_POST['cellphone']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $time = mysqli_real_escape_string($db, $_POST['time']);

    // form validation: ensure that the form is correctly filled in ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "First name is required"); }
    if (empty($surname)) { array_push($errors, "Surname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($cell)) { array_push($errors, "Cellphone number is required"); }
    if (empty($subject)) { array_push($errors, "Subject is required"); }
    if (empty($time)) { array_push($errors, "Time is required"); }

    $query = "INSERT INTO tutors (firstname, surname, email, cellphone_number, subject, time) 
  			  VALUES('$firstname', '$surname', '$email', '$cell', '$subject', '$time')";
    mysqli_query($db, $query);
}
