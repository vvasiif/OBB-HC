<!-- Rate appointments -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


$id = $_GET['id'];

$query = "select * from appointments where appointmentid = '$id'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $con_email = $row['con_email'];
    $pat_email = $row['pat_email'];
    $time = $row['meet_time'];
    $newtime = $row['new_meet_time'];
    $date = $row['meet_date'];
    $details = $row['details'];
}

$query = "select * from users where email='$con_email'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
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

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $rating = $_POST['rating'];
    $remarks = $_POST['remarks'];

    mysqli_query($conn, "UPDATE appointments set rating = '" . $rating . "' WHERE appointmentid = '" . $id . "'");
    mysqli_query($conn, "UPDATE appointments set remarks = '" . $remarks . "' WHERE appointmentid = '" . $id . "'");

    $query = "select * from appointments where con_email = '$con_email' && status = 'completed'";
    $run = mysqli_query($conn, $query);
    $ratingsum = 0;
    $totalrating = 0;
    while ($row = mysqli_fetch_array($run)) {
        $ratingsum = $ratingsum + $row['rating'];
        $totalrating++;
    }

    $avgrating = $ratingsum / $totalrating;

    mysqli_query($conn, "UPDATE users set avgrating = '" . $avgrating . "' WHERE email = '" . $con_email . "'");

    header("Location: myappointments.php");

}

?>

<!doctype html>
<html lang="en">


<body>

    <div class="container">
        <h3>Rate Appointment</h3><br>
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-4 mb-lg-4">
                                <img src="images/placeholder.jpg" height="300px" alt="..."><br><br>

                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Name:
                                        </span><?php echo $username ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Meeting time:
                                        </span><?php echo $newtime ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Meeting date:
                                        </span><?php echo $date ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">

                                            <form action="" method="POST">
                                                <label for="">Give a rating</label>
                                                <select id="inputGender" class="form-control" name="rating" required>
                                                    <option>----</option>
                                                    <option value="5">Excellent</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Bad</option>
                                                    <option value="1">Very bad</option>
                                                </select>
                                                <label for="">Appointment remarks (optional)</label><br>
                                                <textarea id="details" name="remarks" rows="5" cols="45"
                                                    placeholder=""></textarea><br>
                                                <button type="submit" value="rate" name="rate"
                                                    class="btn btn-info">Rate</button>
                                            </form>
                                    </li>
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