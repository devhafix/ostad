<?php
session_start();
if(!$_SESSION['user']){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Hello <?php echo $_SESSION['user']['firstname']; ?>, Welcome to the Dashboard</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="text-center">This is your dashboard.</p>
                <p class="text-center"><a href="logout.php">Logout</a></p>
            </div>
        </div>
    </div>
</body>
</html>
