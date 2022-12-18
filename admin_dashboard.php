<?php
require_once("postnav.php");
// echo "Welcome " . $_SESSION['email'];

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
            <div class="col-lg-4">
            <a href="list.php?id=1"><button type="button" class="btn-large">Blood Request (<?php echo $brl ?>)</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php?id=2"><button type="button" class="btn-large">Blood Donors (<?php echo $bdl ?>)</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="newcon.php?id=3"><button type="button" class="btn-large">Consultants/Doctors Waitlist (<?php echo $newcon ?>)</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="allcon.php?id=4"><button type="button" class="btn-large">Consultant/Doctors (<?php echo $patlist ?>)</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php?id=5"><button type="button" class="btn-large">Other Users (<?php echo $conlist ?>)</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php?id=6"><button type="button" class="btn-large">Appointments (<?php echo $conlist ?>)</button></a>
            </div>
            <div class="col-lg-12 list-btn">
            <a href="list.php?id=7"><button type="button" class="btn-large">Total Users (<?php echo $allusers ?>)</button></a>
            </div>
        </div>

    </div>
</body>



</html>