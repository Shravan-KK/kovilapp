<?php
session_start();
$showconfirmation = true;
$showwarning = false;
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['delete'])){
    $sql = "DELETE FROM address WHERE id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Address deleted successfully";
    }
    else{
        echo "Address not deleted";
    }
        } 
        if(isset($_POST['cancel'])){
            header("Location: addresslistpage.php");
        }
if(isset($_POST['delete'])){
    $showconfirmation = false;
    $showwarning = true;
}
?>
<?php include 'header.php';?>
<div class="container d-flex justify-content-center align-items-center flex-column">
    #confirmation message
    <?php if($showconfirmation) {
        echo "<div class= 'container border border-primary rounded-3 mb-3 p-3'>
        <h3>Are you sure you want to delete this address?</h3><br>
        <form method='post'>
            <button type='submit' class='btn btn-danger' name='delete'>Yes</button>
            <button type='submit' class='btn btn-primary' name='cancel'>No</button>
        </form>
    </div>";
}?>
    #warning message
    <?php if($showwarning) {
        echo"<div class='container border border-primary rounded-3 mt-3 p-3'>
        <h3>Your record has been deleted successfully</h3>
        <a href='addresslistpage.php' class='btn btn-primary'>Back to Address List</a>
    </div>";
    }?>
</div>
</body>
</html>