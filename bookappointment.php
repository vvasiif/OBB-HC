<!-- Enter details and book appointment page -->

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

$conid = $_GET['id'];
$patemail = $_SESSION['email'];


// $query = "select * from users where userid = $conid";

$query = "select * from appointments where pat_email = '$patemail' && status = 'new' || status = 'booked'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {

    if($row['status'] == "new" || $row['status'] == "booked"){}
    header("Location: myappointments.php");
}



$query = "select * from users where userid = $conid";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $conspec = $row['specialization'];
    $conusername = $row['username'];
    $conemail = $row['email'];
    $concity = $row['city'];
    $conphone = $row['phone'];
    $fee = $row['fee'];
    $rating = $row['avgrating'];
    $status = "new";
    $appointmentid = rand(1111111111, 9999999999);

}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $meet_date = $_POST['meetdate'];
    $meet_time = $_POST['meettime'];
    $details = $_POST['details'];
    $patemail = $_SESSION['email'];

    $query = "insert into appointments (pat_email,con_email,details,meet_time,meet_date,status,appointmentid)
    value ('$patemail','$conemail','$details','$meet_time','$meet_date','$status','$appointmentid')";
    mysqli_query($conn, $query);

    header("Location: payment.php");

}

?>

<html>

<head>
    <script type="text/javascript">
    window.onload = function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("meetdate")[0].setAttribute('min', today);
    }
    </script>

</head>

<body>
    <div class="bg">
        <div class="container">
            <form action="" method="POST">
                <h3>Booking your appointment</h3>

                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="card card-style1 border-0">
                            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 mb-4 mb-lg-4">
                                        <img src="images/placeholder.jpg" height="300px" alt="...">
                                        <ul class="list-unstyled mb-1-9"><br>

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <h4 style="color: black;"> <?php echo $conspec; ?> </h4>
                                            </li>

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <span class="display-26 text-secondary me-2 font-weight-600">Name:
                                                </span>
                                                <?php echo $conusername; ?>
                                            </li>

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <span class="display-26 text-secondary me-2 font-weight-600">E-mail:
                                                </span>
                                                <?php echo $conemail; ?>
                                            </li>

                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">City:
                                                </span><?php echo $concity; ?></li>

                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Phone:
                                                </span><?php echo $conphone; ?></li>

                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Rating:

                                                </span> <?php echo $rating; ?>/5</li>

                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Fee:
                                                </span><?php echo $fee; ?> PKR</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 px-xl-10">
                                        <ul class="list-unstyled mb-1-9">

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <label for="">Date</label>
                                                <input type="date" class="form-control" id="inputdate" name="meetdate"
                                                    required>
                                            </li>

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <label for="">Time</label>
                                                <input type="time" class="form-control" id="time" name="meettime"
                                                    required>
                                            </li>

                                            <label for="">Other details (optional)</label>
                                            <textarea id="details" name="details" rows="5" cols="45"
                                                placeholder=""></textarea>

                                            <li class="mb-2 mb-xl-3 display-28">
                                                <button type="submit" value="Submit" name="submit"
                                                    class="btn btn-info">Book</button>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
</body>

</html>