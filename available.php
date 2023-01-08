<?php
require_once 'connection.php';
include_once('postnav.php');

$email = $_SESSION['email'];

// echo "Welcome " . $_SESSION['email'];

$query = "select available from bloodbanklist where email = '$email'";
            $run = mysqli_query($conn,$query);
            if($row=mysqli_fetch_array($run)){
                if($row["available"]=="yes"){
                    $header = "You're listed as a blood donor";
                }
            }

if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_SESSION['email'];
$availablity = $_POST['availablity'];
mysqli_query($conn,"DELETE FROM bloodbanklist WHERE email='" . $email . "'");
header("Location: bbportal.php");

// $query = "select * from bloodbanklist where email = '$email'";
// $run = mysqli_query($conn,$query);
}

?>

<!doctype html>
<html lang="en">

<body>
    <div class="bg">
        <div class="container">
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <form action="" method="POST">
                        <h4 style="color: black; text-align:center">You're listed as a donor!</h4><em>
                        <div class="center-box">
                            <button type="" value="no" name="availablity" class="btn btn-info">Remove your listing as a
                                donor!</button>
                            <a class="btn btn-info" href="dashboard-nav.php">Back to dashboard</a>
                        </div>

                        <div class="msg">
                            <?php if(isset($message)) { echo $message; } ?>
                        </div>
                    </form>
                </div>
            </div><br>
            <br>
            <h3>Blood requests</h3><br>
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <table class="table-list col-lg-12">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Date & Time</th>
                        </tr>
                        <tbody>
                            <?php
                $query = "select * from bloodrequestlist";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['bloodtype']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['area']; ?></td>
                                <td><?php echo $row['dateadded']; ?></td>
                            </tr>
                            <?php  } 
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>