<?php
require_once 'connection.php';

session_start();

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['email']==NULL) { 
  include_once('prenav.php');
}else{
  include_once('postnav.php');
}

?>


<!doctype html>
<html lang="en">

<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <a href="bbportal.php"><button type="button" class="mainmenubb btn-large-main"><em
                            style="color: white; text-shadow: 2px 2px #000000;">Blood Bank
                            Portal</em></button></a>
            </div>
            <div class="col-lg-6">
                <a href="hcportal.php"><button type="button" class="mainmenuhc btn-large-main"><em
                            style="color: white; text-shadow: 2px 2px #000000;">Health Consultant
                            Portal</em></button></a>
            </div>
        </div>
    </div>




</body>

</html>