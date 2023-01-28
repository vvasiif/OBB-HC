<!-- Payment gateway -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}

?>
<!doctype html>
    <html lang="en">
      <head>
</head>

<body>
<div class="container">
        <div class="col-lg-12">
        <h3>Payment Gateway</h3>    
            <div class="col-lg-12 list-btn">
            <a href="myappointments.php"><button type="button" class="btn btn-info">Confirm</button></a>
            </div>
        </div>
    </div>
</body>
</html>