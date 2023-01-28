<!-- User details page -->

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

$query = "select * from users where email='$email'";
$run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($run)) {
    $username = $row['username'];
    $password = $row['password'];
    $dob = $row['dob'];
    $city = $row['city'];
    $cnic = $row['cnic'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $qualification = $row['qualification'];
    $file = $row['file'];
    $role = $row['role'];
}
$_SESSION['role'] = $role;

?>

<!doctype html>
<html lang="en">

<head>

</head>


<body>

    <div class="container">
        <h3>Your Details</h3><br>
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-4 mb-lg-4">
                                <img src="images/placeholder.jpg" height="300px" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Name:
                                        </span><?php echo $username ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">E-mail:
                                        </span><?php echo $email ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">CNIC:
                                        </span><?php echo $cnic ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">City:
                                        </span><?php echo $city ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">DoB:
                                        </span><?php echo $dob ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Gender:
                                        </span><?php echo $gender ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Phone:
                                        </span><?php echo $phone ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 data">
                        <a class="btn btn-info" href="changepassword.php">Change password</a>
                        <a class="btn btn-info" href="editdetails.php">Edit details</a> <br>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
</body>

</html>