<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="arr">Masukkan input array(pisahkan dengan ;):</label><br>
        <input type="text" name="arr" id="" placeholder="e.g (1,1;2,3;3,14)" >
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $array = explode(";",$_POST["arr"]);
        function print_array($array) {
            for ($i = 0; $i < count($array); $i++) {
              echo $array[$i] . "<br>";
            }
          }
      
          echo "Data Array:<br>";
          print_array($array);
    }
    ?>
</body>
</html>