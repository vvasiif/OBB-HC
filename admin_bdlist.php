<!-- Admin panel - Blood bank lists -->

<?php
require_once 'connection.php';
include_once('postnav.php');

session_start();

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$query = "select status from users where email = '$email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    if ($row['status'] == 'wait' || $row['status'] == 'reject') {
        header("Location: applicationpending.php");
    }
}
?>


<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Blood Bank Portal</h3>
        <div class="row">
            <div class="col-lg-12">
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">

                <table class="table col-lg-12">
                        <h3 style="color: black;">Donor list</h3>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                            <th>City</th>
                            <th>Added</th>
                        </tr>
                        <tbody>
                            <?php
$query = "select * from bloodbanklist";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['bloodtype']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['dateadded']; ?></td>
                            </tr>
                            <?php }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>