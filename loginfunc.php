<!-- backend for login page -->
<?php
session_start();
include("connection.php");
if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = md5($_POST['password']);
  $query = "SELECT * FROM admin WHERE username = '$user' || email = '$user' && password = '$password'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);

  if ($total == 1) {
    $_SESSION['user_name']=$user;
    header('location:index.php');
  }else{
    echo "<script>alert('Password or Username is incorrect');</script>";
    echo "<script>window.open('login.php','_self')</script>";
  }
}

?>