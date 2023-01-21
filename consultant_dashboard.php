<?php
require_once "postnav.php";
// echo "Welcome " . $_SESSION['email'];

$query = "select * from users where email = '$email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $con = $row['userid'];
    if ($row['status'] == 'wait' || $row['status'] == 'reject') {
        header("Location: applicationpending.php");
    }
}

$newapp = 0;
$preapp = 0;

$query = "select * from appointments where status = 'booked' || status = 'new' && con_email = '$email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $newapp++;
}

$query = "select * from appointments where con_email = '$email' && status = 'completed' || status = 'absent'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $preapp++;
}

?>


<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <h3>Consultant Dashboard</h3>
            <div class="col-lg-12 list-btn">
                <a href="appointmentlist.php?id=1&con=<?php echo $con ?>"><button type="button" class="btn-large">New Appointments
                        (<?php echo $newapp ?>)</button></a>
                <a href="appointmentlist.php?id=2&con=<?php echo $con ?>"><button type="button" class="btn-large">Previous Appointments
                        (<?php echo $preapp ?>)</button></a>
            </div>
        </div>
    </div>
</body>

</html>