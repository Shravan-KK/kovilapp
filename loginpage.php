<?php
session_start();
if(isset($_SESSION['emailid'])) {
    header("Location: addresslistpage.php");
}

/*$emailid = "a@gmail.com";
$password = "1234";*/
#var_dump($_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoproject";
$con = mysqli_connect($servername,$username,$password,$dbname);

 if (isset($_POST['email']) && isset($_POST['pswd'])) {
    $sql = "SELECT *FROM users WHERE emailid = '$_POST[email]'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if($row['emailid'] === $_POST['email'] && $row['password'] === md5($_POST['pswd'])){
            $_SESSION['emailid'] = $row['emailid'];
            $_SESSION['password'] = $row['password'];
            header("Location: addresslistpage.php");
        }else{
            echo "Invalid email or password";}
    }else{
        echo "Try again after some time";
    }
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background-image: url("workplace.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mt-0 mb-0">Login</h3>
        <form method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember">Remember me
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>