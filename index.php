<?php
session_start();

if(isset($_SESSION["username"])) {
    header("Location: 6.php");
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
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="username">username: </label>
        <input type="text" name="username" id=""><br>
        <label for="password">password: </label>
        <input type="password" name="password" id="myInput"><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br>
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'user' && $password == 'user123') {
            $_SESSION["username"] = $username;
            header("Location: 6.php");
        } else {
            echo "Data yang dimasukkan salah";
        }
    }
    ?>
    <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
</body>
</html>