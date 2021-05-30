<?php
session_start();

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cell = $_POST['phone_number'];
    $ID_number = $_POST['ID'];
    $employee_number = $_POST['employee'];

    $edit = mysqli_query($db,"update users set username='$username', email='$email', phone_number='$cell', ID_number='$ID_number', employee_number='$employee_number' where id='$id'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:superuser_admins.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Admins</title>
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
    <h2>Update Admins</h2>
</div>

<form method="post">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $data['username'] ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?>">
    </div>
    <div class="input-group">
        <label>Cellphone Number [+27]</label>
        <input type="text" name="phone_number" value="<?php echo $data['phone_number'] ?>">
    </div>
    <div class="input-group">
        <label>ID</label>
        <input type="text" name="ID" value="<?php echo $data['ID_number'] ?>">
    </div>
    <div class="input-group">
        <label>Employee Number</label>
        <input type="text" name="employee" value="<?php echo $data['employee_number'] ?>">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="update">Update</button>
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