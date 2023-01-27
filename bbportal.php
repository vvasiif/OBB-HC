<?php
require_once 'connection.php';
include_once 'postnav.php';


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
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="addavail.php"><button type="button" class="btn-large">Donate Blood</button></a>
                    </div>
                    <div class="col-lg-6">
                        <a href="searchavail.php"><button type="button" class="btn-large">Search Blood</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>