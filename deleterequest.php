<!-- Delete blood request -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_SESSION['email'];
    $availablity = $_POST['availablity'];
    mysqli_query($conn, "DELETE FROM bloodrequestlist WHERE email='" . $email . "'");
    header("Location: addrequest.php");
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

                        <table class="table-list col-lg-12">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Blood Group</th>
                                <th>City</th>
                                <th>Area</th>
                                <th>Requested</th>
                            </tr>
                            <tbody>

                                <?php
$query = "select * from bloodrequestlist where email = '$email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {

    ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['bloodtype']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['area']; ?></td>
                                    <td><?php echo $row['dateadded']; ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <button type="submit" value="Submit" name="deleterequest"
                                                class="btn btn-info">Delete request</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table><br>
                        <h2 class="msg">Every request gets automatically<br>deleted after three days of posting!</h2>
                        <div class="center-box">
                            <a class="btn btn-info" href="dashboard-nav.php">Back to dashboard</a>
                        </div>

                        <div class="msg">
                            <?php if (isset($message)) {echo $message;}?>
                        </div>
                    </form>

                </div>
            </div>

        </div>
</body>

</html>