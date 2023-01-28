<!-- Admin panel - Patients and other users list -->


<?php
require_once 'postnav.php';

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

?>
<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <h3>Patients & Other Users</h3>
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <table class="table col-lg-12">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                        </tr>
                        <tbody>
                            <?php
                $query = "select * from users where role = 'pat'";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                            <?php  } 
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>