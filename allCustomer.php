<?php
include("check_session.php");
?>
<!DOCTYPE html>
<html>
<!-- connection section -->
<?php
include("header.php");
include("connection.php");
// query for information table
$query = "SELECT * FROM information";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total!= 0) {
?>

    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="content-all">
                    <h2>All Customer List <button class="btn btn-primary"><a href="newCustomer.php" style="color: #fff; text-decoration: none">New Customer</a></button></h2>
                    <table class="table table-bordered mt-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        
                        <!-- get data in all costumer from information table -->
                <?php
                while ($result = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['customer-name']; ?></td>
                            <td><?php echo $result['company-name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['mobile']; ?></td>
                            <td><a href="view.php?id=<?php echo $result['id']; ?>" class='btn view'>View</a></td>
                            <td><a href="delete.php?id=<?php echo $result['id']; ?>" class='btn delete' onclick = 'return checkdelete()'>Delete</a></td>
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

    <script type="text/javascript">
        function checkdelete(){
            return confirm('Are you sure to delete')
        }
    </script>
                                   

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