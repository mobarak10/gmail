<!-- header section -->
<?php
include("check_session.php");
?>
<!DOCTYPE html>
<html>
<head>
   <!--  connection link -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Marketting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <!-- start header section -->
    <header id="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <img src="images/companyLogo.png" alt="US IT Solution">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header-text">
                        <h1>Business Communication Tools [Email]   <a class="btn btn-danger btnLogout" href="logout.php">Logout</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->

    <div id="menu-section">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Customer</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="allCustomer.php">All Customer</a>
                                <a class="dropdown-item" href="newCustomer.php">New Customer</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Email Send</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="all_mail.php">Send to All</a>
                                <a class="dropdown-item" href="select_email.php">Send to Custom</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>
</html>