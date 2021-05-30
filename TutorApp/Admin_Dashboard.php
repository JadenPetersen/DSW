<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username'].'\'s'; ?> Dashboard </title>
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
            <li><a href="Admin_Dashboard.php?logout='1'" style="color: red;">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3 style="text-align: center">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p style="text-align: center" ><strong><?php echo $_SESSION['username'].'\'s'; ?></strong> Dashboard </p>
    <?php endif ?>
</div>

<div class="dashbut">
    <a href="Tutor_register.php"><button class="butt" >CREATE TUTORS</button></a>
    <a href="Admin_Tutors.php"><button class="butt" >DISPLAY TUTORS</button></a>
</div>
<div>
    <footer class="footer">
        <nav class="navbar">
            <div class="logo"> <img src="./images/logo-placeholder.png" width="120" alt=""></div>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#contact">Contact Us</a></li>
                    <li><a href="superuser_login.php">Super User</a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>
</body>
</html>
