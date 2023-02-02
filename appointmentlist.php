<!-- View appointment list as a consultant -->

<?php
require_once "postnav.php";

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}

$id = $_GET['id'];

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3 style="color: black;">Appointment List</h3>

        <div class="row">

            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <table class="table col-lg-12">
                        <tr>
                            <th>Patient</th>
                            <th>Appointment date</th>
                            <th>Patient's preffered appointment time</th>
                            <th>New appointment time</th>
                            <th>Date/Time</th>
                            <th>Status</th>

                        </tr>
                        <tbody>
                            <?php
if ($id == 1) {
    $query = "select * from appointments where con_email = '$email' && status = 'new' && payment = 'yes'";
} elseif ($id == 2) {
    $query = "select * from appointments where con_email = '$email' && payment = 'yes' && status = 'completed' || status = 'absent'";
}

$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {?>
                            <tr>
                                <td><?php echo $row['pat_email']; ?></td>
                                <td><?php echo $row['meet_date']; ?></td>
                                <td><?php echo $row['meet_time']; ?></td>
                                <td><?php echo $row['new_meet_time']; ?></td>
                                <td><?php echo $row['datetime']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><a class="btn btn-info"
                                        href="appdetail.php?id=<?php echo $row['appointmentid']; ?>">View</a></td>
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