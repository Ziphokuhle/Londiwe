<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conn=mysqli_connect("localhost","root","","Storecars");
    if (  $conn) {
      echo "Connected";
    }

    else {
      echo "Not connected to the database"."<br>";
    }

     ?>
  </body>
</html>
