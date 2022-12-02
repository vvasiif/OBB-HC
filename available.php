<?php
require_once 'connection.php';
include_once('postnav.php');

$email = $_SESSION['email'];

// echo "Welcome " . $_SESSION['email'];

if($_SERVER['REQUEST_METHOD']=="POST"){
$availablity = $_POST['availablity'];

mysqli_query($conn,"UPDATE bloodbanklist set available='" . $availablity . "' WHERE email='" . $email . "'");
      $message="Avaiability updated!";

$query = "select * from bloodbanklist where email = '$email'";
$run = mysqli_query($conn,$query);

}



?>


<!doctype html>
<html lang="en">

<body>
    <div class="bg">
        <div class="container">
            <h3>You're listed as a donor!</h3><br>
            <div class="center-box">
                <input type="radio" name="availablity" checked="checked" value="Available"> Available<br>
                <input type="radio" name="availablity" value="Unavailable"> Unavailable
            </div>
            <button type="submit" value="Submit" name="submit" class="btn btn-primary">Update Availability</button>
        </div>
        <div class="msg">
                <?php if(isset($message)) { echo $message; } ?>
            </div>
    </div>
</body>



</html>

<script type="text/javascript">
function preventBack() {
    window.history.forward();
}
setTimeout("preventBack()", 0);
window.onunload = function() {
    null
};
</script>