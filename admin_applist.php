<?php
require_once 'connection.php';
include 'functions.php';
include_once('postnav.php');

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$email = $_SESSION['email'];

?>

<!doctype html>
<html lang="en">

<body>
    <div class="container">
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">Appointments</h4>
                <table class="table col-lg-12">
                    <tr>
                        <th scope="col">Patient</th>
                        <th scope="col">Consultant/Doctor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Time of booking</th>
                    </tr>
                    <tbody>
                        <?php 
                        $query = "select * from appointments";
                        $run = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($run)){ ?>
                        <tr>
                            <td><?php echo $row['pat_email']; ?></td>
                            <td><?php echo $row['con_email']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['rating']; ?></td>
                            <td><?php echo $row['datetime']; ?></td>
                        </tr>
                        <?php   } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>