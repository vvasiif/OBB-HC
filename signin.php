<?php
include_once 'connection.php';
require_once 'prenav.php';

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