<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            button{
                background-color: rgb(18, 170, 18);
                color: white;
            }
            button:hover{
                background-color: white;
                border: 1px solid rgb(18, 170, 18);
            }
            body{
                background-image: url("img/settings_bg.jpg");
                background-size: contain;
            }
            h3{
                color: white;
            }
        </style>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" id="content">
            <h3>Change Password</h3>
            <form action="settings_script.php" method="POST">
                <div class="form-group">
                    <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                </div>
                <button type="submit" class="btn">Change</button>
                <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
            </form>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>