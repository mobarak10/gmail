<!-- connection section -->
<?php
include("check_session.php");
include("connection.php");
include("flash.php");
error_reporting(0);
?>

<!-- end connection section -->

 <?php
    if ($_POST['submit']) {
        $nm = $_POST['name'];
        $cmp = $_POST['company'];
        $phn = $_POST['mobile'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $adrs = $_POST['address'];
        $filename = $_FILES["uploadfile"]["name"];
        $temp_name = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($temp_name, $folder);

        if ($nm!="" && $cmp!="" && $phn!="" && $email!="" && $web!=""  && $adrs!="" && $filename!="") {
            $query = "INSERT INTO `information`(`customer-name`, `company-name`, `mobile`, `email`, `web-address`, `address`, `photos`) VALUES ('$nm','$cmp','$phn','$email','$web' ,'$adrs', '$folder')";
            // $sql = "INSERT INTO `email_record`(`email`) VALUES ('$email')";
            $data = mysqli_query($conn, $query);
            // $data = mysqli_query($conn, $sql);

            if($data){
                FlashMessage::add("<script>alert('Record added successfully');</script>");
                // echo "<script>alert('Record added successfully')</script>";
                 header("location:newCustomer.php");
            }else{
                FlashMessage::add("<script>alert('change email');</script>");
                // echo "change email";
                header("location:newCustomer.php");
            }
        }else{
            FlashMessage::add("<script>alert('All field are required');</script>");
            header("location:newCustomer.php");
            // echo "All field are required!";
        }
    }
    ?>