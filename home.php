<?php

// Set the variables to be passed to the Python script
$x = "Wasif";
$y = "Ali";

// Execute the Python script and store the result in a variable
$result = shell_exec("python DrBot/add.py $x $y");

?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
    h4{
        text-align: center;
        font-family: poppins;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>Result: <?php echo $result ?> </h4>

</body>
</html>