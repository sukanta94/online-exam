<?php
session_start();
$pinflag = 0;
$name = 0;
if (isset($_SESSION['username'])) {
    $name = 1;
}
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Welcome</h1>
            <?php
            if ($name == 1) {
                echo $_SESSION['username'];
                echo '<br>
        <a href="logout.php">logout Here</a>';
            } else {
                echo "bro";
                echo '<br />
        <a href="login.php">login Here</a>';
            } ?>
</head>
<body>
    
</body>
</html>