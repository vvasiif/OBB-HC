<!-- View appointment details as a consultant -->

<?php 
include_once 'connection.php';
require_once("postnav.php");

session_start();

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$id = $_GET['id'];

$query = "select * from appointments where appointmentid = '$id'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $pat_email = $row['pat_email'];
    $time = $row['meet_time'];
    $newtime = $row['new_meet_time'];
    $date = $row['meet_date'];
    $details =$row['details'];
    $status = $row['status'];
}

$query = "select * from users where email='$pat_email'";
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

if(isset($_POST["update"]))
{
    $status = $_POST['status'];
    mysqli_query($conn,"UPDATE appointments set status='" . $status . "' WHERE appointmentid='" . $id . "'");
    header("Location: consultant_dashboard.php");
}

if(isset($_POST["confirm"]))
{
if($_SERVER['REQUEST_METHOD']=="POST")
{
mysqli_query($conn,"UPDATE appointments set new_meet_time='" . $_POST['meettime'] . "' WHERE appointmentid='" .  $id . "'");
mysqli_query($conn,"UPDATE appointments set status = 'booked' WHERE appointmentid='" .  $id . "'");
header("Location: consultant_dashboard.php");
}
}

?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>

    <div class="container">
        <h3>Appointment Details</h3><br>
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-4 mb-lg-4">
                                <img src="images/placeholder.jpg" height="300px" alt="..."><br><br>

                                <form action="" method="POST">
                                    <label for="">Comfirm appointment time</label>
                                    <input value="<?php echo $time ?>" type="time" class="form-control" id="time"
                                        name="meettime" required>
                                    </select>

                                    <button type="submit" value="confirm" name="confirm" class="btn btn-info">Confirm
                                        booking</button>
                                </form>
                                <a class="btn btn-info" target="_blank"
                                    href="https://meet.jit.si/<?php echo $id ?>">Start session</a>

                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <ul class="list-unstyled mb-1-9">
                                <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Status:
                                        </span><?php echo $status ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Name:
                                        </span><?php echo $username ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">E-mail:
                                        </span><?php echo $email ?></li>
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
                                            class="display-26 text-secondary me-2 font-weight-600">Patient's preffered
                                            meeting time:
                                        </span><?php echo $time ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">New meeting time:
                                        </span><?php echo $newtime ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Meeting date:
                                        </span><?php echo $date ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Additional detail:
                                        </span><?php echo $details ?></li>
                                    <br>
                                    <form action="" method="POST">
                                        <label for="">Appointment status</label>
                                        <select id="inputGender" class="form-control" name="status" required>
                                            <option selected>----</option>
                                            <option value="completed">Completed</option>
                                            <option value="absent">Didn't happen</option>
                                        </select>
                                        <button type="submit" value="update" name="update"  class="btn btn-info">update</button>
                                    </form>
                                 
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