<?php
require_once 'connection.php';

session_start();

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['email']==NULL) { 
  include_once('prenav.php');
}else{
  include_once('postnav.php');
}
?>

<!doctype html>
    <html lang="en">
      <head>
</head>

<body>
  <div class="bg">
  <div class="conatiner">
  <h3>HC Portal</h3>
  </div>
  </div>
</body>
</html>