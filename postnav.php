<?php
require_once('connection.php');
session_start();

$email = $_SESSION['email'];

$query = "select * from users where email='$email'";
$run = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($run)){
    $username = $row['username'];
   //  $password = $row['password'];
   //  $city = $row['city'];
   //  $phone = $row['phone'];
   //  $gender = $row['gender'];
   //  $qualification = $row['qualification'];
   //  $file = $row['file'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      
    <title>OBB&HC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
   <body>
   <nav>
         <div class="logo">
          <a href="index.php">OBB&HC</a>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="hcportal.php">Health Consultant</a></li>
            <li><a class="active" href="bbportal.php">Blood Bank</a></li>
            <li><a href="profile.php">
               <?php
               echo $username;
               ?>
               </a></li>
            <li><a href="signout.php">Sign out</a></li>
         </ul>
      </nav>
   </body>
</html>