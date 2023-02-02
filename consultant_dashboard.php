<!-- Consultant main dashboard -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


$query = "select * from users where email = '$email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
$availability = $row['availability'];

    $con = $row['userid'];
    if ($row['status'] == 'wait' || $row['status'] == 'reject') {
        header("Location: applicationpending.php");
    }
}

$newapp = 0;
$conapp = 0;
$preapp = 0;

$query = "select * from appointments where status = 'new' && con_email = '$email' && payment = 'yes'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $newapp++;
}

$query = "select * from appointments where status = 'booked' && con_email = '$email' && payment = 'yes'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $conapp++;
}

$query = "select * from appointments where con_email = '$email' && status = 'completed' && payment = 'yes' || status = 'absent' ";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $preapp++;
}

if($_SERVER['REQUEST_METHOD']=="POST")
{

    $availability2 = $_POST['availablity'];

   mysqli_query($conn, "UPDATE users set availability='" . $availability2 . "' WHERE email='" . $email . "'");

   header("Location: consultant_dashboard.php");


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
            <p style="text-align: center; color: green;">You are currently <?php echo $availability ?> for appointment booking</p>
            <div class="text-center">
                <form action="" method="POST">
                    <label for="">Update your availability status</label>
                    <select id="inputGender" class="form-group" name="availablity" required>
                        <option value="none" selected>----</option>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                    <button type="submit" value="submit" name="submit" class="form-group btn btn-info">Update</button>
                </form>
            </div>

            <div class="col-lg-12 list-btn">
                <a href="appointmentlist.php?id=1&con=<?php echo $con ?>"><button type="button" class="btn-large">New
                        Appointments
                        (<?php echo $newapp ?>)</button></a>
                <a href="confirmedapplist.php?con=<?php echo $con ?>"><button type="button" class="btn-large">Confirmed
                        Appointments
                        (<?php echo $conapp ?>)</button></a>
                <a href="appointmentlist.php?id=2&con=<?php echo $con ?>"><button type="button"
                        class="btn-large">Previous Appointments
                        (<?php echo $preapp ?>)</button></a>
            </div>
        </div>

    </div>
</body>

</html>