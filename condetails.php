<?php 

$id = $_GET['id'];

?>

<!doctype html>
<html lang="en">

<head>

</head>

<?php
include_once 'connection.php';
require_once("postnav.php");

$email = $_SESSION['email'];

$query = "select * from users where userid='$id'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $username = $row['username'];
    $email = $row['email'];
    $dob = $row['dob'];
    $city = $row['city'];
    $cnic = $row['cnic'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $qualification = $row['qualification'];
    $specialization = $row['specialization'];
    $experience = $row['experience'];
    $fee = $row['fee'];
    $file = $row['file'];
    $role = $row['role'];
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
   $status = $_POST['status'];
mysqli_query($conn,"UPDATE users set status='" . $_POST['status'] . "' WHERE email='" . $email . "'");
header("Location: admin_dashboard.php");
}

?>

<body>

    <div class="container">
        <h3>Your Details</h3><br>
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-4 mb-lg-4">
                                <img src="images/placeholder.jpg" height="300px" alt="..."><br><br>
                                <form action="" method="POST">
                                    <label for="">Update status</label>
                                <select id="" class="form-control" name="status" required>
                                    <option selected value="wait">Wait</option>
                                    <option value="reject">Reject</option>
                                    <option value="accept">Accept</option>
                                </select>
                                <button type="submit" value="Submit" name="submit"
                                    class="btn btn-info">Confirm</button>
                                    </form>
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
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Qualification:
                                        </span><?php echo $qualification ?></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Specialization:
                                        </span><?php echo $specialization ?></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Experience:
                                        </span><?php echo $experience ?> years</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Fee:
                                        </span><?php echo $fee ?> pkr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 data">

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

</html>