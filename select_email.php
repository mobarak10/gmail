<?php
// check session
include("check_session.php");
?>
<!DOCTYPE html>
<html>
<?php
include("header.php");
?>
<?php
// connection database
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM information";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
?>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="content-all">
                <h2>All Email List</h2>
                <table class="table table-bordered mt-3 table-hover text-center">
                    <thead>
                        <tr> 
                            <th>Company Name</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    while ($result = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                <td><?php echo $result['company-name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><a href="one_mail.php?id=<?php echo $result['id']; ?>" class='btn btn-primary'>Send Email</a></td>
                            </tr>
                       <?php } 
                    }else{
                        echo "No record found";
                    }
                    ?>
                </table>
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