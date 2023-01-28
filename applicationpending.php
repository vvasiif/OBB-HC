<!-- Waiting page for new consultant -->

<?php
include_once 'connection.php';
include_once 'postnav.php';
session_start();

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$email = $_SESSION['email'];

$query = "select status from users where email = '$email'";
 $run = mysqli_query($conn,$query);
 if($row=mysqli_fetch_array($run)){
    if($row["status"]=="wait"){
$message = "Your application is in process!";
    }
    elseif($row["status"]=="reject"){
        $message = "Your application has been rejected!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <div class="msg">
            <?php if(isset($message)) { echo $message; } ?>
        </div>
    </div>
</body>

</html>