<?php
include("connection.php");

$query = "SELECT COUNT('email') FROM email_record where email='mobarak.hossain.cse12@gmail.com'";
$data = mysqli_query($conn, $query);
while ($result = mysqli_fetch_assoc($data)) {
   print_r($result);
}
?>