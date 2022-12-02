<?php
require_once 'connection.php';

session_start();

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['email']==NULL) { 
  include_once('prenav.php');
}else{
  include_once('postnav.php');
}


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $bloodtype = $_POST['bloodtype'];
    $findordonate = $_POST['findordonate'];
    
$_SESSION['bloodtype']=$bloodtype;

                if($findordonate=="donate"){
                    header("Location: donateform.php");
                }
                elseif($findordonate=="find"){
                    header("Location: donatelist.php");
                }
            }
            
?>




<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="bg">
        <div class="container">
        <table>
  <tr>
    <th><a href="addavail.php"><button type="button" class="btn-large">Donate Blood</button></a></th>
    <th><a href="hcportal.php"><button type="button" class="btn-large">Get Blood</button></a></th>
  </tr>
</table>
        </div>
    </div>
</body>



</html>