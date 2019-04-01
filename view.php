<?php
// check session
include("check_session.php");
// connection database
include("connection.php");
include("header.php");
?>
<?php 
// query for information table 
  $id=$_GET['id'];
  $email=$_GET['email'];
  $sql="SELECT * FROM information WHERE id=$id";
  $data=mysqli_query($conn,$sql);
  $result=mysqli_fetch_assoc($data);
 ?>

 <?php
 // query for email table
 $query = "SELECT * FROM email_record WHERE email_id=$id";
 $dta = mysqli_query($conn, $query);
 // $rslt = mysqli_fetch_assoc($data);

 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="customer-profile">
                    <img src="<?php echo $result['photos'] ?>" alt="customer photo">
                    <h3>Name: <?php echo $result['customer-name']?></h3>
                    <p>Company Name: <?php echo $result['company-name']?></p>
                    <p>Mobile Number: <?php echo $result['mobile']?></p>
                    <p>Email: <?php echo $result['email']?> </p>
                    <p>Web Address: <?php echo $result['web-address']?></p>
                    <p>Address: <?php echo $result['address']?></p>
                    <p class="total-email"><a href="show_mail.php?id=<?php echo $result['id']; ?>" class="total_mail">Total Email: <?php echo ($dta->num_rows); ?></a></p>
                </div>
            </div>
        </div>
    </div>

<!-- footer section -->

<?php
include("footer.php");
?>

    <!-- optional javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
