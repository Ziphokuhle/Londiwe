
<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
if(!isset($_SESSION['email']))
{

   ?>
    <form  action="login.php" method="post">

      Email<input type="email" name="email"><br>
      Password<input type="password" name="password"><br>
      <button type="submit" name="login">Login</button>
      <a href=Treg.php>Sign Up</a>;

    </form>
<?php
}
else{
  echo "<a href=main.php>Go to the Main Page</a>";
}
?>
</body>
</html>

    <?php


if(isset($_POST['login'])) {

  $emails=$_POST['email'];
  $pass=$_POST['password'];


$logins="SELECT * FROM buying WHERE email='$emails' AND password='$pass'";
$query=mysqli_query($conn,$logins);

$row=mysqli_num_rows($query);

if ($row>0) {
$_SESSION['email']=$emails;

$_SESSION['password']=$pass;
header("Location:login.php");

echo "logged in!";


  // code...
}
else {
  echo "not logged in!";
}
  // code...
}



     ?>
