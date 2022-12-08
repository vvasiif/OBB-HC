<?php
require_once 'connection.php';
include_once 'postnav.php';

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="addavail.php"><button type="button" class="btn-large">Donate</button></a>
            </div>
            <div class="col-lg-6">
                <a href="search.php"><button type="button" class="btn-large">Search</button></a>
            </div>
        </div>
    </div>
</body>

</html>