<!-- Consultant list of a specific speciality -->

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

$query = "select status from appointments where pat_email = '$email'";
$run = mysqli_query($conn,$query);
if($row=mysqli_fetch_array($run)){
    if($row["status"]=="new" || $row["status"]=="booked"){
        header("Location: myappointments.php");
    }
}

$specialization = $_GET['specialization'];

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3><?php echo $specialization ?></h3>
        <div class="row">
            <?php
        $count = 0;
                $query = "select * from users where role = 'con' && specialization = '$specialization' && status = 'accept'";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $picture_filename = $row['image'];
                    $count = $count + 1;
                    ?>
            <div style="padding: 10px;" class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <?php echo '<img src="pics/'.$picture_filename .'" height="250px" width="220px" alt="...">'; ?>
                        <br><br>
                        <p style="font-style: italic;" class="con-name"><?php echo $row['username'] ?></h4>
                        </p>
                        <p class="con-spec"><?php echo $row['specialization'] ?></p>
                        <p class="con-spec"><?php echo "Experience: " . $row['experience'] . " years" ?></p>
                        <p class="con-spec"><?php echo "Rating: " . $row['avgrating'] . "/5"?></p>
                        <p class="con-name"><?php echo "Fee: " . $row['fee'] . " PKR" ?></p>
                        <a class="btn btn-info" href="bookappointment.php?id=<?php echo $row['userid']; ?>">Book
                            appointment</a>
                    </div>
                </div>
            </div>
            <?php } $message = $count . " doctors/consultants found for $specialization!" ?>
        </div>

        <p class="msg"> <?php if(isset($message)) { if($count < 1)  { echo $message; } } ?> </p>

    </div>

</body>

</html>