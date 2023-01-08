<?php
require_once("postnav.php");
include 'functions.php';
// echo "Welcome " . $_SESSION['email'];

$id=$_GET['id'];

    ?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3 style="color: black;">Appointment list</h3>

        <div class="row">

            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <table class="table-list col-lg-12">
                        <tr>
                            <th>Patient name</th>
                            <th>Appointment date</th>
                            <th>Patient's preffered appointment time</th>
                            <th>New appointment time</th>
                            <th>Booked</th>
                            <th>Status</th>

                        </tr>
                        <tbody>
                            <?php
                            if($id == 1){
                                $query = "select * from appointments where status = 'new' || status = 'booked'";
                            }
                            elseif($id == 2){
                                $query = "select * from appointments where status = 'completed' || status = 'absent'";
                            }
                                $run = mysqli_query($conn,$query);
                                while($row1 = mysqli_fetch_array($run)){
                                    
                                   $query = "select username from users where email = '$row1[pat_email]'";
                                    $run = mysqli_query($conn,$query);
                                    while($row2 = mysqli_fetch_array($run)){ 
                                        $username = $row2['username'];
                                        
                                    ?>
                            <tr>

                                <td><?php echo $row2['username']; ?></td>
                                <td><?php echo $row1['meet_date']; ?></td>
                                <td><?php echo $row1['meet_time']; ?></td>
                                <td><?php echo $row1['new_meet_time']; ?></td>
                                <td><?php echo timeAgo($row1['datetime']); ?></td>
                                <td><?php echo $row1['status']; ?></td>
                           
                                <td><a class="btn btn-info"
                                        href="appdetail.php?id=<?php echo $row1['appointmentid']; ?>">View</a></td>

                            </tr>
                            <?php  } }
                                   ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>