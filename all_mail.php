<?php
// session_start();

// connection section
error_reporting(0);
include("check_session.php");
include("connection.php"); 
include("flash.php");
  $sql="SELECT * FROM information";
  $data=mysqli_query($conn,$sql);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

  while ($result=mysqli_fetch_assoc($data)) {

    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","pdf","zip");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF, JPEG, PNG or ZIP file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name); //The folder where you would like your file to be saved
         echo "";
      }else{
         echo"";
      }
   }

   
    if ($_POST['submit']) {


       $sub = $_POST['subject'];
        $body = $_POST['message'];
        $email = $result['email'];
        $email_id = $result['id'];
        $folder = $_POST['image'];
        if ($sub!="" && $body!="" && $email!="") {
        $query = "INSERT INTO `email_record`(`email`, `email_id`, `subject`, `message`, `file`) VALUES ('$email','$email_id','$sub', '$body', '$folder')";
        $data1 = mysqli_query($conn, $query);

            if($data){
                echo "<script>alert('Record added successfully')</script>";
                // header('location:allCustomer.php');
            }else{
                echo "change email";
            }
        }else{
            // die("connection fail because".error_reporting());
        }
       

        // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function


    //Load Composer's autoloader
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                                    // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                     // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';    // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                     // Enable SMTP authentication
        $mail->Username = 'mobarak.hossain.cse12@gmail.com';                 // SMTP username
        $mail->Password = 'joykhan151390';                              // SMTP password
        $mail->SMTPSecure = 'TLS';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                          // TCP port to connect to

        //Recipients
        $mail->setFrom('no-reply@digitaltradingusa.com', 'US-IT SOLUTION LLC');
        $mail->addAddress($result['email']);                // Name is optional
        // $mail->addReplyTo('info@digitaltradingusa.com', 'Digital Trading USA');
        $mail->addAddress( $result['email']);       // Add a recipient
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        if ($_FILES['image']['name']!=null) {
           $mail->addAttachment("images/".$file_name);
        }
        // $mail->addAttachment("images/".$file_name);            // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Optional name

        //Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $_POST['subject'];
        $mail->Body    = 
        '<html>
    <head>
        
    </head>
    <body>
        <h1 style="background: #226be2;border-radius: 10px;padding-bottom: 45px;">

        <img src="https://usitsolution.net/site_assets/images/resources/logo.png" style="height:80px;margin-top: 20px; float:left;margin-left: 10px">

        <a href="https://usitsolution.net/" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;">
        <span class="link-white" style="color:#ffffff; text-decoration:none; float: left; font-size:30px;margin-top: 35px;margin-left: 10px;">US-IT SOLUTION LLC</span>
        </a>

        &nbsp;  &nbsp; &nbsp;
        <div style="">
        <a href="https://usitsolution.net/about-us-it-solution-llc" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;margin:20px;">
        <span class="link-white" style="color:#ffffff; text-decoration:none;font-size: 20px;">ABOUT</span>
        </a> 

        &nbsp;  &nbsp; &nbsp; 
        <a href="https://usitsolution.net/web-site-design-development-service" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;">
        <span class="link-white" style="color:#ffffff; text-decoration:none;font-size:20px;">SERVICES</span>
        </a>

         &nbsp; &nbsp; &nbsp;
         <a href="https://usitsolution.net/our-pricing" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none">
        <span class="link-white" style="color:#ffffff; text-decoration:none;font-size: 20px;">PRICING</span>
        </a>

         &nbsp; &nbsp; &nbsp; 
        <a href="https://usitsolution.net/us-it-solution-llc-contact" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none">
        <span class="link-white" style="color:#ffffff; text-decoration:none;font-size: 20px;">CONTACT</span>
        </a>
        </div>
    </body>
    </html>
    '.'<p>'.'<span style = "font-size:20px">'.'Subject: '.'</span>'.$_POST['subject'].'</p>'

    .'<p>'.'<span style = "font-size:20px">'.'Body: '.'</span>'.$_POST['message'].'</p>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.

    '<p>US IT SOLUTION LLC,USA<br>Mobile:(405) 822-2222<br>Email:info@usitsolutation.net</p>'.
    
    '<footer>
        <p style="background: #226be2;color:white;text-align:center;border-radius: 10px;">Copyright &copy;2019 | All Right Reserved by US IT Solution</p>
    </footer>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        FlashMessage::add("<script>alert('mail send successfully');</script>");
        // echo "<script>alert('mail send successfully')</script>";
        // header('location:index.php');
    } catch (Exception $e) {
        // FlashMessage::add("<script>alert('Message could not be sent. Mailer Error: '", $mail->ErrorInfo);"</script>");
        // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    }

  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include("header.php");
	 ?>




<br><br>
	<div id="main-content">
        <div class="container">
            <div class="row">
                <h2 class="sendtoCustom">Send Email to All Customer 
                  <button class="btn btn-primary">
                    <a href="select_email.php" style="color: #fff; text-decoration: none">Send To One</a>
                  </button>
                </h2>
                <?php FlashMessage::render(); ?>
          				<form action="" class="form-area" method="post" enctype="multipart/form-data">
          					
                    <div class="form-group">
          					Subject <input type="text" name="subject" class="form-control" value="" placeholder="enter subject">
          					</div>

          					<div class="form-group">
          					Messages <input type="text" name="message" class="form-control" value="" placeholder="enter message">
          					</div>

                    <div class="form-group">
                    Send this file: <input id="file" name="image" type="file" />
                    </div>

          					<input type="submit" name="submit" class="btn btn-primary" value="Send Mail"><br><br>
          				</form>
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