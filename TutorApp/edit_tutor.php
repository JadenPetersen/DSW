<?php
session_start();

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tutors where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['first_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $cell = $_POST['cellphone'];
    $subject = $_POST['subject'];
    $time = $_POST['time'];

    $edit = mysqli_query($db,"update tutors set firstname='$fullname', surname='$surname', email='$email', cellphone_number='$cell', subject='$subject', time='$time' where id='$id'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:Admin_Tutors.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<!--<h3>Update Data</h3>-->
<!---->
<!--<form method="POST">-->
<!--    <input type="text" name="firstname" value="--><?php //echo $data['firstname'] ?><!--" placeholder="Enter Name" Required>-->
<!--    <input type="text" name="lastname" value="--><?php //echo $data['surname'] ?><!--" placeholder="Enter Surname" Required>-->
<!--    <input type="text" name="email" value="--><?php //echo $data['email'] ?><!--" placeholder="Enter Email" Required>-->
<!--    <input type="submit" name="update" value="Update">-->
<!--</form>-->



<!DOCTYPE html>
<html>
<head>
    <title>Update Tutor</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div>
    <nav class="navbar">
        <div class="logo"> <img src="./images/logo-placeholder.png" width="200" alt=""></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="Admin_Dashboard.php">Dashboard</a></li>
                <li><a href="Admin_Tutors.php">Tutors</a></li>
                <li id="name"> <?php echo "User: ".$_SESSION['username']; ?></li>
                <li><a href="Admin_Dashboard.php?logout='1'" style="color: red;">Log Out</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="header">
    <h2>Update Tutor</h2>
</div>

<form method="post" >
    <div class="input-group">
        <label>First Name*</label>
        <input type="text" name="first_name" value="<?php echo $data['firstname'] ?>" required>
    </div>
    <div class="input-group">
        <label>Surname*</label>
        <input type="text" name="surname" value="<?php echo $data['surname'] ?>" required>
    </div>
    <div class="input-group">
        <label>Email*</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?>" required>
    </div>
    <div class="input-group">
        <label>Cellphone Number [+27]*</label>
        <input type="text" name="cellphone" value="<?php echo $data['cellphone_number'] ?>" required>
    </div>
    <div class="input-group">
        <label>Subject* </label>
        <input type="text" name="subject" value="<?php echo $data['subject'] ?>" required>
    </div>
    <div class="request">
        <label>Time*</label>
        <select name="time" id="time" value="<?php echo $data['time'] ?>" required>
            <option value>Preferred time slot.</option>
            <option value="00:00-01:00">00:00-01:00</option>
            <option value="01:00-02:00">01:00-02:00</option>
            <option value="02:00-03:00">02:00-03:00</option>
            <option value="03:00-04:00">03:00-04:00</option>
            <option value="04:00-05:00">04:00-05:00</option>
            <option value="05:00-06:00">06:00-07:00</option>
            <option value="06:00-07:00">07:00-08:00</option>
            <option value="07:00-08:00">08:00-09:00</option>
            <option value="08:00-09:00">09:00-10:00</option>
            <option value="10:00-11:00">10:00-11:00</option>
            <option value="11:00-12:00">11:00-12:00</option>
            <option value="12:00-13:00">12:00-13:00</option>
            <option value="13:00-14:00">13:00-14:00</option>
            <option value="14:00-15:00">14:00-15:00</option>
            <option value="15:00-16:00">15:00-16:00</option>
            <option value="16:00-17:00">16:00-17:00</option>
            <option value="17:00-18:00">17:00-18:00</option>
            <option value="18:00-19:00">18:00-19:00</option>
            <option value="19:00-20:00">19:00-20:00</option>
            <option value="20:00-21:00">20:00-21:00</option>
            <option value="21:00-22:00">21:00-22:00</option>
            <option value="22:00-23:00">22:00-23:00</option>
            <option value="23:00-00:00">23:00-00:00</option>
        </select>
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="update">Register</button>
    </div>
</form>
<footer>
    <nav class="navbar">
        <div class="logo"> <img src="./images/logo-placeholder.png" width="120" alt=""></div>
        <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#contact">Contact Us</a></li>
                <li><a href="signin.php">Admin Login</a></li>
            </ul>
        </div>
    </nav>
</footer>
</body>
</html>