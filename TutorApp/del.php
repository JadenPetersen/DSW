<?php
include "server.php";

$db = mysqli_connect('localhost', 'root', '', 'registration');
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // write delete query
    $query = "DELETE FROM `tutors` WHERE `id`='$user_id'";

    // Execute the query

    $result = $db->query($query);


    if ($result == TRUE) {
        echo '<strong>' . '<script>alert("Record deleted successfully")</script>' . '</strong>';
        header("location:Admin_Tutors.php");

    }else{
        echo "Error:" . $query . "<br>" . $db->error;
    }
}
