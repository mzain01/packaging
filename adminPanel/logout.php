<?php
session_start();

if(isset($_SESSION['adminname'])) {
    // If the user session is set, unset it
    unset($_SESSION['adminname']);
}
// Redirect to the login page
echo "<script>
alert('Logout Successfully');
location.assign('../index.php');</script>";
?>
