<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url("workplace.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container d-flex flex-column" style="width: 1000px; height: 500px; margin-top: 100px;">
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        You have been <strong>logged out</strong> successfully.
       </div>
       <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        Click here to <a href="loginpage.php" class="alert-link">login again</a>.
       </div>
    </div>
</body>
</html>