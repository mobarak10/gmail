<?php
session_start();
// error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Marketting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <header id="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <!-- logo images -->
                        <img src="images/companyLogo.png" alt="US IT Solution">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header-text">
                        <h1>Business Communication Tools [Email]</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


<!-- main content section -->
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="login">
                    <form action="loginfunc.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username or Email:</label>
                            <input type="text" class="form-control" name="username" value="" placeholder="enter email or username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" value="" placeholder="enter pass">
                        </div>
                        <input type="submit" name="submit" value="Login" class="btn btn-info btn-sm"> 
                    </form>
                </div>
            </div>
        </div>
    </div>


<footer>
        <div class="container">
            <div class="row">
                <div class="footer-content">
                    <p>Copyright &copy;2019 | All Right Reserved by US IT Solution</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- optional javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>