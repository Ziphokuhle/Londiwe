<?php
include "connection.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
       th{border:1px solid black;
       background-color:brown;
     color:lightgreen;}
     td{border:1px solid black;
        background-color:brown;
      color:silver;}
      a{color:blue;}
      button{color:red;
      background-color: whitesmoke;}
     </style>
   </head>
   <body>
     <h1 > Personal Information</h1>
<form class="" action="main.php" method="post">
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Gender</th>
      <th>Province</th>
      <th>Car</th>
    </tr>


<?php

$dis="SELECT * FROM buying";
$query2=mysqli_query($conn,$dis);
 if(isset($_POST['search']))
 {
   $search=$_POST['name'];
   $dis="SELECT * FROM buying WHERE name LIKE '%".$search."%'";
   $query2=mysqli_query($conn,$dis);
   }
   $row=mysqli_fetch_all($query2,MYSQLI_ASSOC);
foreach($row as $people)
{
  ?>
  <tr>
    <td><?php echo $people['name']; ?></td>
    <td><?php echo $people['email']; ?></td>
    <td><?php echo $people['password']; ?></td>
    <td><?php echo $people['gender']; ?></td>
    <td><?php echo $people['province']; ?></td>
    <td><?php echo $people['car']; ?></td>
  </tr>
  <?php
}
$dis="SELECT COUNT(*) as name FROM buying";
$query2=mysqli_query($conn,$dis);
$count=mysqli_fetch_assoc($query2)['name'];

?>
<tr>
  <td>Total users:</td>
  <td><?php echo $count; ?></td>
</tr>
 </table>
<input type="textArea" name="name"></label><br><br>
<button type="submit" name="search">Search</button>
<button type="submit" name="logout">Logout</button>
<a href=Treg.php>Add the new user</a>;
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['logout'])){
  session_destroy();
  header("Location:login.php");
}
 ?>
