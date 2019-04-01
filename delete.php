<!-- delete data from information table -->
<?php
include("check_session.php");
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM information WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if ($data) {
	echo "<script>alert('Record deleted successfully')</script>";
	header('location:allCustomer.php');
}else{
	echo "deleted failed!";
}
?>