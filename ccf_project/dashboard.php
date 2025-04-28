<?php
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user's first name from session
$firstName = $_SESSION['first_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF Small Groups</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #ffffff;
        }
        .sidebar a {
            color: #ffffff;
        }
        .logo-section {
            text-align: center;
            padding: 20px;
        }
        .content-section {
            padding: 20px;
        }
        .card {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar p-3">
            <div class="logo-section">
                <img src="avatar-placeholder.png" alt="Profile" class="rounded-circle" width="80">
                <h5><?php echo htmlspecialchars($firstName); ?></h5>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Small Groups</a>
                <a class="nav-link" href="#">GLC</a>
            </nav>
        </div>

        <div class="content-section flex-grow-1">
            <div class="container">
                <h1>Welcome</h1>
                <h4>Welcome to CCF Small Groups 
                    <a href="logout.php" class="btn btn-link float-right">Log Out</a>
                </h4>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="discipleship-logo.png" alt="Discipleship Groups" class="img-fluid">
                                <h5>Discipleship Groups</h5>
                                <p>Life is meant to be lived in love. You don’t have to go through life alone. Be part of a community that will love, encourage, pray and help you grow. Join a dgroup today!</p>
                                <a href="Dgroups.html" class="btn btn-primary">My Groups</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="glc-logo.png" alt="GLC" class="img-fluid">
                                <h5>GLC</h5>
                                <p>The Global Leadership Center is CCF’s official training arm that equips one in his discipleship journey towards Christ-likeness. Character development and spiritual multiplication is emphasized as one moves from being a seeker to becoming a servant-leader in God’s kingdom.</p>
                                <a href="glctraining.html" class="btn btn-primary">My Trainings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
