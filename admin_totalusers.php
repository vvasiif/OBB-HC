<!-- Admin panel - Total users list -->


<?php

require_once 'connection.php';
include_once('postnav.php');

$email = $_SESSION['email'];

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

?>

<!doctype html>
<html lang="en">

<body>
    <div class="container">
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <h4 style="color: black; text-align:center;">All users</h4>
                <table class="table col-lg-12">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">City</th>
                        <th scope="col">Gender</th>
                    </tr>
                    <tbody>
                        <?php 
                        $query = "select * from users where role = 'con' || role = 'pat'";
                        $run = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($run)){ ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
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