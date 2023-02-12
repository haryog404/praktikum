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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      Start: <input type="number" name="start" value="1">
      End: <input type="number" name="end" value="10">
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['submit'])) {
        $start = $_POST['start'];
        $end = $_POST['end'];
        
        for($i = $start; $i <= $end; $i++) {
          echo $i . "<br>";
        }
      }
    ?>
</body>
</html>
