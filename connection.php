<!-- database connection -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bct(email)";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
	echo "";
}else{
	die("connection fail because".mysqli_connect_error());
}

?>