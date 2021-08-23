<?php 
session_start();
require_once "config.php";
require_once "dept_config.php";
$err = 0;
if ($t_con) {
  if (count($_POST) > 0) {
    $uno = $_POST['id'];
    $u = $_POST['pass'];
    $runo = "SELECT * FROM `t_registered` WHERE `unique_id` = '$uno' AND `t_pass` = '$u' ";
    $a = mysqli_query($t_con, $runo);
    $unam = mysqli_num_rows($a);
    $aa=mysqli_fetch_assoc($a);
    if ($unam > 0) {
      $_SESSION['username'] = $aa['t_name'];
        header("location:profile.php");
        session_create_id();
      } 
      else {
      $err = 1;
    }
  }
  $t_con->close();
  $d_con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASd</title>
</head>
<body>
    <h1>Hello login page</h1>
    <span>2nd pull</span>
    <div>
        <form action="login.php" method="post">
            <input type="t_id" name="id" placeholder="Enter unique Id">
            <input type="password" name="pass" placeholder="Enter password">
            <button type="submit">login</button>
        </form>
    </div>
</body>
</html>