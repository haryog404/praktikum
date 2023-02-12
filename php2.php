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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="yn">Do you want to  be greet? (y/n)</label>
        <input type="text" name="yn" id="" placeholder="Don't submit other than (y/n)!">
        <input type="submit" name="submit" value="ok">
    </form>
    <?php
    $hour = date("H");
    
    if ($hour < 12) {
        $hour = "Good morning!";
    } elseif ($hour < 18) {
        $hour = "Good afternoon!";
    } else {
        $hour = "Good evening!";
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $post = strtolower($_POST["yn"]);
        switch ($post) {
            case 'y':
                echo "$hour";
                break;

            case 'n':
                echo "Well...";
                break;    
                
            default:
                header("Location: https://youtu.be/dQw4w9WgXcQ");
                exit;
        }
    }
    ?>
</body>
</html>