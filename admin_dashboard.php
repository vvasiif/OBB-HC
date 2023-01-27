<?php
require_once("postnav.php");
include_once 'functions.php';

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$brl = 0;
$bdl = 0;
$newcon = 0;
$conlist = 0;
$patlist = 0;
$applist = 0;
$allusers = 0;

$query = "select * from bloodrequestlist";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $brl = $brl+1;
}

    $query = "select * from bloodbanklist";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $bdl = $bdl+1;
}

$query = "select status from users where role = 'con' && status = 'wait'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $newcon = $newcon+1;
}

$query = "select * from users where role = 'pat'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $conlist = $conlist+1;
}

$query = "select * from users where role = 'con'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $patlist = $patlist+1;
}

$query = "select * from appointments";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $applist = $applist+1;
}

$query = "select * from users";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $allusers = $allusers+1;
}



?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <a href="admin_bblist.php"><button type="button" class="btn-large">Blood Bank Lists (Requests: <?php echo $brl ?> Donors: <?php echo $bdl ?>)</button></a>
            </div>
            <div class="col-lg-6 list-btn">
            <a href="admin_newcon.php"><button type="button" class="btn-large">Consultants/Doctors Waitlist (<?php echo $newcon ?>)</button></a>
            </div>
            <div class="col-lg-6 list-btn">
            <a href="admin_conlist.php"><button type="button" class="btn-large">Consultant/Doctors (<?php echo $patlist ?>)</button></a>
            </div>
            <div class="col-lg-6 list-btn">
            <a href="admin_patlist.php"><button type="button" class="btn-large">Patients & Other Users (<?php echo $conlist ?>)</button></a>
            </div>
            <div class="col-lg-6 list-btn">
            <a href="admin_applist.php"><button type="button" class="btn-large">Appointments (<?php echo $conlist ?>)</button></a>
            </div>
            <div class="col-lg-12 list-btn">
            <a href="admin_totalusers.php"><button type="button" class="btn-large">Total Users (<?php echo $allusers ?>)</button></a>
            </div>
        </div>

    </div>
</body>



</html>