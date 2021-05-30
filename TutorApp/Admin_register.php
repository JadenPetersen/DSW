<?php include('server.php');

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: signin.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator Registration</title>
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
                <li><a href="superuser.php">Dashboard</a></li>
                <li><a href="superuser_admins.php">Admins</a></li>
                <li><a href="superuser_tutors.php">Tutors</a></li>
                <li id="name"> <?php echo "User: ".$_SESSION['username']; ?></li>
                <li><a href="Admin_Dashboard.php?logout='1'" style="color: red;">Log Out</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="header">
    <h2>Administrator Registration</h2>
</div>

<form method="post" action="Admin_register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Cellphone Number [+27]</label>
        <input type="text" name="phone_number" value="<?php echo $phone_number; ?>">
    </div>
    <div class="input-group">
        <label>ID</label>
        <input type="text" name="ID" value="<?php echo $ID_number; ?>">
    </div>
    <div class="input-group">
        <label>Employee Number</label>
        <input type="text" name="employee" value="<?php echo $employee_number; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
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
