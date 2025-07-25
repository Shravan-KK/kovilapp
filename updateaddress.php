<?php
session_start();
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";
$con = mysqli_connect($servername,$username,$password,$dbname);
$sql = "SELECT * FROM address WHERE id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
#if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['mobile'])){
    $sql1 = "UPDATE address SET name = '$_POST[name]', address = '$_POST[address]', email = '$_POST[email]', mobile = '$_POST[mobile]' WHERE id = $id";
   # echo $sql1;
    $result1 = mysqli_query($con,$sql1);
    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['mobile'])){
        echo "Address updated successfully";
    }
#s}
?>
<?php include 'header.php';?>
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow mt-7" style="width: 1000px;">
       <form method = "post">
          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>">
          </div>
          <div class="mb-3 mt-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="4"><?php echo $row['address'];?></textarea>
          </div>
          <div class="mb-3 mt-4">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>">
          </div>
          <div class="mb-3 mt-4">
            <label for="mobile" class="form-label">Phone:</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile'];?>">
       </form>
       <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary mt-3">Update Address</button>
            <a href="addresslistpage.php" class="btn btn-danger mt-3 ms-2">Back</a>
          </div>
    </div>
</body>
</html>