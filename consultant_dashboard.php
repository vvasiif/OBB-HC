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
            <a href="list.php"><button type="button" class="btn-large">View appointments</button></a>
            </div>
        </div>
    </div>
</body>
</html>