<?php
require_once("postnav.php");
// echo "Welcome " . $_SESSION['email'];


$query = "select status from users where email = '$email'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    if($row['status'] == 'wait' || $row['status'] == 'reject'){
        header("Location: applicationpending.php");
    }
}

$newapp = 0;
$preapp = 0;

$query = "select * from appointments where con_email= '$email' && (status= 'new' || status = 'booked')";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $newapp = $newapp + 1;
}

$query = "select * from appointments where con_email= '$email' && status= 'completed' || status = 'absent'";
$run = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($run)){
    $preapp = $preapp + 1;
}


    ?>


<!doctype html>
    <html lang="en">
      <head>
</head>

<body>
<div class="container">
        <div class="col-lg-12">
        <h3>Consultant Dashboard</h3>    
            <div class="col-lg-12 list-btn">
            <a href="appointmentlist.php?id=1"><button type="button" class="btn-large">New appointments (<?php echo $newapp ?>)</button></a>
            <a href="appointmentlist.php?id=2"><button type="button" class="btn-large">Previous appointments (<?php echo $preapp ?>)</button></a>
            </div>
        </div>
    </div>
</body>
</html>