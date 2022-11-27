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
        <div class="conatiner">
            <h3>Blood Bank Portal</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="input">
                        <h5>Blood Type</h5>
                    </label>
                    <select name="bloodtype" class="form-select" aria-label="Default select example">
                        <option value="Select Blood Type">Select Blod Type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <br>
                    <input class="form-check-input" value="find" type="radio" name="findordonate" id="flexRadioDefault1" checked required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Find blood
                    </label>
                    <br>
                    <input class="form-check-input" value="donate" type="radio" name="findordonate" id="flexRadioDefault2" required>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Donate blood
                    </label>
                    <br>

                    <button type="submit" value="Submit" name="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
    </div>
</body>



</html>