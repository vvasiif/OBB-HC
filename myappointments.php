<!-- View appointments list as a patient -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

$message = $_GET['msg'];

$query = "select * from appointments where pat_email = '$email' && status = 'new'";
$run = mysqli_query($conn, $query);
while ($row1 = mysqli_fetch_array($run)) {

}

?>

<!doctype html>
<html lang="en">

<body>
    <div class="container">
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">Upcoming Appointments (One at a time)</h4>
                <table class="table col-lg-12">
                    <tr>
                        <th scope="col">Consultant</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Appointment date</th>
                        <th scope="col">Your preffered appointment time</th>
                        <th scope="col">Confirmed Appointment time</th>
                        <th scope="col">Status</th>

                    </tr>
                    <tbody>
                        <?php
$query1 = "select * from appointments where pat_email = '$email' && (status = 'new' || status = 'booked')";
$run1 = mysqli_query($conn, $query1);
while ($row1 = mysqli_fetch_array($run1)) {
    $con_email = $row1['con_email'];

    $query2 = "select * from users where email = '$con_email'";
    $run2 = mysqli_query($conn, $query2);
    while ($row2 = mysqli_fetch_array($run2)) {
        ?>
                        <tr scope="row">
                            <td><?php echo $row2['username']; ?></td>
                            <td><?php echo $row2['phone']; ?></td>
                            <td><?php echo $row2['email']; ?></td>
                            <td><?php echo $row1['meet_date']; ?></td>
                            <td><?php echo $row1['meet_time']; ?></td>
                            <td><?php echo $row1['new_meet_time']; ?></td>
                            <td><?php echo $row1['status']; ?></td>
                            <td><a style="margin-top: -5px;" class="btn btn-info" href="appointmentsession.php?appid=<?php echo $row1['appointmentid'] ?>">Start</a></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">Previous Appointments</h4>
                <table class="table col-lg-12">
                    <thead>
                    <tr>
                        <th scope="col">Consultant</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Appointment date</th>
                        <th scope="col">Appointment time</th>
                        <th scope="col">Status</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php
$query3 = "select * from appointments where pat_email = '$email'  && status = 'completed'  || status = 'absent'";
$run3 = mysqli_query($conn, $query3);
while ($row1 = mysqli_fetch_array($run3)) {
    $con_email = $row1['con_email'];

    $query4 = "select * from users where email = '$con_email'";
    $run4 = mysqli_query($conn, $query4);
    while ($row2 = mysqli_fetch_array($run4)) {
        ?>
                        <tr scope="row">
                            <td><?php echo $row2['username']; ?></td>
                            <td><?php echo $row2['specialization']; ?></td>
                            <td><?php echo $row1['meet_date']; ?></td>
                            <td><?php echo $row1['meet_time']; ?></td>
                            <td><?php echo $row1['status']; ?></td>

                            <td><a class="btn btn-info"href="rateappointment.php?id=<?php echo $row1['appointmentid'] ?>">Rate</a></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>

                <div class="msg">
                    <?php if (isset($message)) {echo $message;}?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
