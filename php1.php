<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <label for="">Email: </label>
        <input type="text" name="email" id=""><br>
        <input type="submit" name="submit" value="ok">
    </form>
    <?php
    $pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if (empty($_POST["email"])) {
            echo "Email are required";
        } elseif (!preg_match($pattern,$_POST["email"])) {
            echo "Email invalid";
        } else {
            echo "Email submitted";
        }
        }
    
    ?>
</body>
</html>