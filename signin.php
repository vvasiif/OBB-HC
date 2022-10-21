<?php
include_once 'connection.php';

session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select password from users where email = '$email'";
    $run = mysqli_query($conn,$query);
    if($row=mysqli_fetch_array($run)){
        if($password==$row['password']){
            $query = "select role from users where email = '$email'";
            $run = mysqli_query($conn,$query);
            if($row=mysqli_fetch_array($run)){
                if($row["role"]=="pat"){
                    $_SESSION['email']=$email;
                    header("Location: patient_dashboard.php");
                    die;
                }
                elseif($row["role"]=="con"){
                    $_SESSION['email']=$email;
                     header("Location: consultant_dashboard.php");
                    die;
                }
                elseif($row["role"]=="adm"){
                    $_SESSION['email']=$email;
                 header("Location: admin_dashboard.php");
                    die;
                } 
        }
        
    }
    echo '<script>alert("You entered the wrong password!")</script>';
    die;
    header("Location: signin.php");
    } 
    echo '<script>alert("Account do not exist!")</script>';
}
?>



<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">
    <title>Sign In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">OBB&HC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="con_signup.php">Consultant Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

</head>

<body>
    <div class="bg">
        <div class="conatiner">
            <form action="" method="POST">
                <div class="form-group">
                    <h3>Sign In</h3>
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                </div>
                <button type="submit" value="Submit" name="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</body>

</html>