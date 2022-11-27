<?php
session_start();
require_once("signinnavbar.php");

// echo "Welcome " . $_SESSION['email'];
?>
<!doctype html>
    <html lang="en">
      <head>
      <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">        
      <title>OBB&HC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="bg">
        <div class="conatiner2">
        <table>
  <tr>
    <th><a href="bbportal.php"><button type="button" class="btn-large">Blood Bank Portal</button></a></th>
    <th><a href="hcportal.php"><button type="button" class="btn-large">Health Consultancy</button></a></th>
  </tr>
</table>
        </div>
    </div>
</body>



</html>