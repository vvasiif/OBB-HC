<!-- Disease result page -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


$sym1 = $_GET['sym1'];
$sym2 = $_GET['sym2'];
$sym3 = $_GET['sym3'];

$command =  "python DrBot/drbot.py $sym1 $sym2 $sym3";

$result = shell_exec($command);

$result = trim($result);

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Dr. Bot Prediction</h3><br>
        <h4 style="text-align: center;">Based on the symptoms you have entered, it appears<br>that you may have <em
                style="color: red;"><?php echo $result?></em> .<br><br>This is a predicted result!<br>Dr. Bot recommend seeking further evaluation
            from<br>a qualified healthcare professional to confirm<br>the diagnosis and discuss treatment options.</h4>
            <br>
            <a href="resultconsultancy.php?result= <?php echo $result ?>"><button class="btn btn-info"> Get professional consultancy on <?php echo $result ?></button></a>
    </div>
   
</body>

</html>