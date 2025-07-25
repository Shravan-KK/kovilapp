<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Address List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .popup-box {
            position: absolute;
            top: 50px;
            right: 10px;
            z-index: 1000;
            display: none;
            background-color: white;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="wrapper">
        <div class="d-flex flex-column">
            
            <div class="d-flex align-items-start mb-3 bg-primary">
                <nav class="navbar navbar-expand-sm">
                    <div class="container">
                        <ul class="navbar-nav">
                            <div class="d-flex">
                                <li class="nav-item">
                                    <a href="addresslistpage.php" class="btn btn-primary">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="addresslistpage.php" class="btn btn-primary">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="updateaddress.php" class="btn btn-primary">Update Adress</a>
                                </li>
                                <li class="nav-item">
                                    <a href="addaddresspage.php" class="btn btn-primary">Delete Address</a>
                                </li>
                                <li class="nav-item">
                                    <a href="addaddresspage.php" class="btn btn-primary">Add Address</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </nav>
            <div class="d-flex justify-content-end flex-grow-1 mt-2 pe-3">
                <div class="profile-icon ms-3" id="profileIcon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div class="popup-box" id="popupBox">
                    <a href="logoutpage.php" class="btn btn-danger btn-sm w-100">Sign Out</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script>
        // Toggle the profile popup
        document.getElementById("profileIcon").addEventListener("click", function () {
            const popup = document.getElementById("popupBox");
            popup.style.display = (popup.style.display === "none" || popup.style.display === "") ? "block" : "none";
        });

        // Hide popup when clicking outside
        document.addEventListener("click", function (event) {
            const popup = document.getElementById("popupBox");
            const profile = document.getElementById("profileIcon");
            if (!popup.contains(event.target) && !profile.contains(event.target)) {
                popup.style.display = "none";
            }
        });
        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            // Place your delete logic here
            alert('Item deleted!');
            // Hide modal manually if needed
            const deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmModal'));
            deleteModal.hide();
        });
    </script>