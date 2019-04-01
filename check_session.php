<!-- session page -->
<?php
session_start();
error_reporting(0);
$userprofile = $_SESSION['user_name'];
if ($userprofile ==! true) {
  header('location:login.php');
}
?>