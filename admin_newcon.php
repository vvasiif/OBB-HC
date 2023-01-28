<!-- Admin panel - New consultant waitlist list -->


<?php
require_once 'postnav.php';

session_start();

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
        <div class="col-lg-12">
            <h3>New Consultants</h3>
            <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <table class="table-list col-lg-12">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                    </tr>
                    <tbody>
                        <?php
$query = "select * from users where role = 'con' && status = 'wait'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><a class="btn btn-info" href="condetails.php?id=<?php echo $row['userid']; ?>">View</a></td>
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