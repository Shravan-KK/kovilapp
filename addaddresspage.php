<?php
session_start();
if(!isset($_SESSION['emailid'])){
    header("Location: loginpage.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";
$con = mysqli_connect($servername,$username,$password,$dbname);
?>
    <?php
    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['mobile'])){
    $sql = "INSERT INTO address (name,address,email,mobile) VALUES ('$_POST[name]','$_POST[address]','$_POST[email]','$_POST[mobile]')";
    #echo $sql;
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Address added successfully";
        header("Location: addresslistpage.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
  }

    ?>
<?php include 'header.php';?>
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow mt-7 ms-10 " style="width: 1000px;">
        <form method="post">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" id="address" placeholder="Enter address" name="address"
                    rows="4"></textarea>
            </div>
            <div class="mb-3 mt-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-4">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="mobile">
        </form>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary mt-3">Add Address</button>
            <a href="addresslistpage.php" class="btn btn-danger mt-3 ms-2">Back</a>
        </div>
    </div>
</div>
</body>

</html>