<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: superuser_login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']; ?> Admins </title>
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
        <p style="text-align: center" ><strong> ADMINS </strong></p>
    <?php endif ?>

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    $query = "SELECT * FROM `users`";

    //execute the query
    $result = $db->query($query);

    ?>

    <table >
        <!--the table head-->
        <thead>
        <tr>
            <th> User Name </th>
            <th> Email </th>
            <th>Phone Number</th>
            <th>ID Number</th>
            <th>Employee Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <!--the table body-->
        <tbody>

        <?php while($row = mysqli_fetch_array($result)): ?> <!--close the php tag but put the table body in the while loop-->

            <!--grab the entire table body-->
            <tr>
                <td>
                    <?php echo $row['username']; ?>
                </td> <!--grabing name from the array and echoing it using php-->

                <td>
                    <?php echo $row['email']; ?>
                </td><!--grabing address from the array and echoing it using php-->

                <td>
                    <?php echo $row['phone_number']; ?>
                </td>

                <td>
                    <?php echo $row['ID_number']; ?>
                </td>

                <td>
                    <?php echo $row['employee_number']; ?>
                </td>
                <td>
                    <a class="edit_btn" href="edit_admin.php?id=<?php echo $row['id']; ?>">
                        Edit</a>
                </td>

                <td>
                    <a class="del_btn" href="del.php?id=<?php echo $row['id']; ?>">
                        Delete</a>
                </td>

            </tr>
        <?php endwhile;?>

        </tbody>
    </table>
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
