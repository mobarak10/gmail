<?php
// check session
include("check_session.php");
// connection database
include("connection.php");
// fash massages
include("flash.php");
error_reporting(0);
?>
<!DOCTYPE html>
<?php
include("header.php");
?>

<div id="main-content">
    <div class="container">
        <div class="row">
            <h2 class="sendtoCustom">Add New Customer <button class="btn btn-primary"><a href="allCustomer.php" style="color: #fff; text-decoration: none">All Customer</a></button></h2>
            <!-- Message -->
            <?php echo FlashMessage::render(); ?>
            <form class="form-area" action="add_new_customer.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Custromer Name</label>
                    <input type="text" value="" name="name"  class="form-control" placeholder="enter name">
                </div>

                <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" name="company" value=""  class="form-control" placeholder="enter company name">
                </div>

                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="tel" name="mobile" value=""  class="form-control" placeholder="enter mobile number">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value=""  class="form-control" placeholder="enter email">
                </div>

                <div class="form-group">
                    <label for="">Web
                    Address</label>
                    <input type="text" name="address" value=""  class="form-control" placeholder="enter web-address">
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                     <textarea name="web" id="" value="" cols="30" rows="3"  class="form-control" placeholder="enter address"></textarea>
                </div>

                 <div class="form-group">
                    <label for="">Your Photo</label>
                    <input class="form-control" type="file" name="uploadfile" value="">
                </div>

                <input type="submit" name="submit" value="Save" class="btn btn-primary btnsave">
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