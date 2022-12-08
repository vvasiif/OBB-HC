<?php
require_once 'connection.php';
include_once('postnav.php');

$email = $_SESSION['email'];

// echo "Welcome " . $_SESSION['email'];


$query = "select available from bloodbanklist where email = '$email'";
            $run = mysqli_query($conn,$query);
            if($row=mysqli_fetch_array($run)){
                if($row["available"]=="yes"){
                    $header = "You're listed as a blood donor";
                }
            }



if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_SESSION['email'];
$availablity = $_POST['availablity'];
mysqli_query($conn,"DELETE FROM bloodbanklist WHERE email='" . $email . "'");
header("Location: bbportal.php");



// $query = "select * from bloodbanklist where email = '$email'";
// $run = mysqli_query($conn,$query);
}



?>


<!doctype html>
<html lang="en">

<body>
    <div class="bg">
        <div class="container">
        <form action="" method="POST">
            <h3>You're listed as a donor</h3><br>
            <div class="center-box">
                <button type="" value="no" name="availablity" class="btn btn-light">Remove your listing as a donor!</button> <br>
                <a class="btn btn-primary" href="dashboard-nav.php">Back to dashboard</a>

            </div>

            <div class="msg">
                <?php if(isset($message)) { echo $message; } ?>
            </div>
        </form>
        </div>
</body>



</html>
