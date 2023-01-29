<!-- View appointment list as a consultant -->

<?php
require_once "postnav.php";

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
        <h3 style="color: black;">Booked Appointments</h3>

        <div class="row">

            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <p style="text-align: center; color: red;" >Start session at the confirmed appointment time</p>
                    <table class="table col-lg-12">
                        <tr>
                            <th>Patient</th>
                            <th>Appointment date</th>
                            <th>Patient's preffered appointment time</th>
                            <th>Confirmed appointment time</th>
                            <th>Date/Time</th>
                        </tr>
                        <tbody>
                            <?php
$query = "select * from appointments where con_email = '$email' && status = 'new' || status = 'booked'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {?>
                            <tr>
                                <td><?php echo $row['pat_email']; ?></td>
                                <td><?php echo $row['meet_date']; ?></td>
                                <td><?php echo $row['meet_time']; ?></td>
                                <td><?php echo $row['new_meet_time']; ?></td>
                                <td><?php echo $row['datetime']; ?></td>
                                <td><a style="margin-top: -5px;" class="btn btn-info" href="appointmentsession.php?appid=<?php echo $row['appointmentid'] ?>">Start</a></td>
                            </tr>
                            <?php }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>