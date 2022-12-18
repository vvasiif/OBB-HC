<?php
require_once 'connection.php';
include 'functions.php';
include_once('postnav.php');

$email = $_SESSION['email'];

// if($_SERVER['REQUEST_METHOD']=="POST"){
//     $email = $_SESSION['email'];
// $availablity = $_POST['availablity'];
// mysqli_query($conn,"DELETE FROM bloodrequestlist WHERE email='" . $email . "'");
// header("Location: addrequest.php");

?>

<!doctype html>
<html lang="en">

<body>
    <div class="container">
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">Upcoming Appointments</h4>
                <table class="table-list col-lg-12">
                    <tr>
                        <th>Consultant</th>
                        <th>Specialization</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>City</th>
                        <th>Appointment date</th>
                        <th>Appointment date</th>
                    </tr>
                    <tbody>
                        <?php
                $query = "select * from appointments where pat_email = '$email' && status = 'new'";
                $run = mysqli_query($conn,$query);
                while($row1 = mysqli_fetch_array($run)){
                    $con_email = $row1['con_email']; 
         
                    $query = "select * from users where email = '$con_email'";
                $run = mysqli_query($conn,$query);
                while($row2 = mysqli_fetch_array($run)){
                    ?>
                        <tr>
                            <td><?php echo $row2['username']; ?></td>
                            <td><?php echo $row2['specialization']; ?></td>
                            <td><?php echo $row2['phone']; ?></td>
                            <td><?php echo $row2['email']; ?></td>
                            <td><?php echo $row2['city']; ?></td>
                            <td><?php echo $row1['meet_date']; ?></td>
                            <td><?php echo $row1['meet_time']; ?></td>
                        </tr>
                        <?php  } }?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">Previous Appointments</h4>
                <table class="table-list col-lg-12">
                    <tr>
                        <th>Consultant</th>
                        <th>Specialization</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>City</th>
                        <th>Appointment date</th>
                        <th>Appointment date</th>
                    </tr>
                    <tbody>
                        <?php
                $query = "select * from appointments where pat_email = '$email'  && status = 'old'";
                $run = mysqli_query($conn,$query);
                while($row1 = mysqli_fetch_array($run)){
                    $con_email = $row1['con_email']; 
        
                    $query = "select * from users where email = '$con_email'";
                $run = mysqli_query($conn,$query);
                while($row2 = mysqli_fetch_array($run)){
                    ?>
                        <tr>
                            <td><?php echo $row2['username']; ?></td>
                            <td><?php echo $row2['specialization']; ?></td>
                            <td><?php echo $row2['phone']; ?></td>
                            <td><?php echo $row2['email']; ?></td>
                            <td><?php echo $row2['city']; ?></td>
                            <td><?php echo $row1['meet_date']; ?></td>
                            <td><?php echo $row1['meet_time']; ?></td>
                        </tr>
                        <?php  } }?>
                    </tbody>
                </table>
                <div class="center-box">
                    <a class="btn btn-primary" href="dashboard-nav.php">Back to dashboard</a>
                </div>

                <div class="msg">
                    <?php if(isset($message)) { echo $message; } ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>