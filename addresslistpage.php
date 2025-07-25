<?php
session_start();
if(!isset($_SESSION['emailid'])){
    header("Location: loginpage.php");
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php include 'header.php';?>
    <div class="container p-2 ms-3">
        <h2>Address List</h2>
    </div>

    <div class="table-responsive container me-10 ms-10 mb-5">
        <table class="table table-bordered table-hover">
            <thead>
                <th>S.no</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </thead>
           <!-- <tr>
                <td>1</td>
                <td>Hari</td>
                <td>123, Main Street, City</td>
                <td>9gmharipasath@gmail.com</td>
                <td>9984673826</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i>View</a>
                        <a href="updateaddress.html" class="btn btn-outline-warning btn-sm me-2"><i
                                class="bi bi-pen"></i>Edit</a>
                        <button type="button" class="btn btn-outline-danger btn-sm " data-bs-toggle="modal"
                            data-bs-target="#deleteConfirmModal"><i class="bi bi-trash"></i>Delete</a>
                            <div class="modal fade" id="deleteConfirmModal" tabindex="-1"
                                aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Delete
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="madal"
                                                aria-label="close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this record?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger"
                                                id="confirmDeleteBtn">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </td>
            </tr> -->
            <tr>
                <?php
                $sql = "SELECT * FROM address";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['mobile']."</td>";
                    echo "<td> 
                    <div class='d-flex'>
                        <a href='#' class='btn btn-outline-primary btn-sm me-2'><i class='bi bi-eye'></i>View</a>
                        <a id='a' href='updateaddress.php?id=".$row['id']."' class='btn btn-outline-warning btn-sm me-2'><i class='bi bi-pen'></i>Edit</a>
                        <a id='a' href='delete.php?id=".$row['id']."' class='btn btn-outline-danger btn-sm'><i class='bi bi-trash'></i>Delete</a>
                    </div> </td>";
                }
                    ?>
            </tr>
        </table>
    </div>
</body>

</html>