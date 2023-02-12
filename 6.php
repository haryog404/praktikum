<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js\jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <video width="100%" autoplay muted loop>
        <source src="video.mp4" type="video/mp4">
    </video>
    <div class="btn btn-danger" onclick="document.location='logout.php'">STOP</div>
</body>
</html>