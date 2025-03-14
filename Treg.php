<?php
//connection
include "connection.php";
if (isset($_POST['register'])) {

  $names=$_POST['name'];
  $emails=$_POST['email'];
  $pass=$_POST['password'];
  $gender=$_POST['gender'];
  $province=$_POST['province'];
  $car=$_POST['cars'];

$reg="INSERT INTO buying(name,email,password,gender,province,car) VALUES ('$names','$emails','$pass','$gender','$province','$car')";
$sql=mysqli_query($conn,$reg);

if ($sql) {
echo "You have insserted the values."."<br>";
}
else {
  echo "couldnt insert."."<br>";
}
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 > Personal Information</h1>
    <form action="Treg.php" method="post">
      <input type="name=" name="name">Name</label><br><br>

    <input type="email" name="email">Email</label><br><br>
    <input type="password" name="password">password</label><br><br>
     <p><h2>Gender</h2></p>
      <input type="radio" name="gender" value="Female">Female</label><br><br>

      <input type="radio"  name="gender" value="Male">Male</label><br><br>
<p>  <h2>Province</h2></p>
<label><input type="checkbox" name="province" value="Gauteng"> Gauteng</label><br><br>
<label><input type="checkbox" name="province" value="Kwazulu Natal">Kwazulu Natal</label><br><br>
<label><input type="checkbox" name="province" value="limpopo">limpopo</label><br><br>

<p><h2>Cars</h2></p>
<select name="cars">
  <option value="volvo" >volvo</option>
    <option value="BMW">BMW</option>
  </select>

<button type="submit" name="register">Register</button>
<a href=login.php>Already have account</a>;
    </form>
  </body>
  </html>
