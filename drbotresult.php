<?php
require_once 'connection.php';
include_once('postnav.php');

$sym1 = $_GET['sym1'];
$sym2 = $_GET['sym2'];
$sym3 = $_GET['sym3'];

echo $sym1;
echo $sym2;
echo $sym3; 

$command =  "python DrBot/drbot.py $sym1 $sym2 $sym3";

$result = shell_exec($command);

echo " Result: " . $result;

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Dr. Bot Results</h3><br>
        <h4 style="text-align: center;">Based on the symptoms you have entered, it appears<br>that you may have <em
                style="color: red;"><?php echo $result ?></em>.<br><br>Dr. Bot recommend seeking further evaluation
            from<br>a qualified healthcare professional to confirm<br>the diagnosis and discuss treatment options.</h4>
    </div>
    </div>
</body>

</html>