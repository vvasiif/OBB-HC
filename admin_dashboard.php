<?php


require_once("postnav.php");

// echo "Welcome " . $_SESSION['email'];
?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <a href="list.php"><button type="button" class="btn-large">Blood Request List</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php"><button type="button" class="btn-large">Blood Donors List</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php"><button type="button" class="btn-large">New Consultants</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php"><button type="button" class="btn-large">Consultant List</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php"><button type="button" class="btn-large">Patient List</button></a>
            </div>
            <div class="col-lg-4 list-btn">
            <a href="list.php"><button type="button" class="btn-large">All Users List</button></a>
            </div>
        </div>

    </div>
</body>



</html>