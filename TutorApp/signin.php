<?php include('server.php');

if(isset($_SESSION['username'])){
    header('location:Admin_Dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="apply.php">Apply</a></li>
            <li><a href="request.php">Request</a></li>
        </ul>
    </div>
</nav>

<div class="header">
    <h2>Administrator Login</h2>
</div>

<form method="post" action="signin.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <div class="input-group" >
        <label><a href="superuser_login.php">SuperUser?</a></label>
    </div>
</form>
<div>
    <footer class="footer" >
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
</div>
</body>
</html>
