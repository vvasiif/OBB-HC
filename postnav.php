<?php
require('connection.php');
session_start();

$email = $_SESSION['email'];

$query = "select * from users where email='$email'";
$run = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($run)){
    $username = $row['username'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Online Blood Bank & Health Consultant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    #pat_opp {
        <?php if($_SESSION['role'] !='pat') {
            echo 'display:none';
        }
        ?>
    }
    #hide_index {
        <?php if($_SESSION['role'] !='pat' ) {
            echo 'display:none';
        }
        ?> 
    }
    </style>

</head>

<body>
    <nav>
        <div id="hide_index" class="logo">
            <a href="index.php"><img height="50px" src="images/logo.png" alt=""></a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li id="pat_opp"><a href="myappointments.php">My appointments</a></li>
            <li><a href="dashboard-nav.php">Home</a></li>
            <li><a href="profile.php">
                    <?php
               echo $username;
               ?>
                </a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </nav>
</body>

</html>