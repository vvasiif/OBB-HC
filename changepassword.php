<?php
include_once 'connection.php';
require_once("postnav.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
  

$email = $_SESSION['email'];
header('profile.php');
$currentpassword = $_POST['currentpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $query = "select * from users where email='$email'";
    $run = mysqli_query($conn,$query);
    
    while($row = mysqli_fetch_array($run)){
        $username = $row['username'];
        $password = $row['password'];
        $city = $row['city'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $qualification = $row['qualification'];
        $file = $row['file'];
    }
    
    if($newpassword == $confirmpassword) {
      if($currentpassword == $password) {
      mysqli_query($conn,"UPDATE users set password='" . $newpassword . "' WHERE email='" . $email . "'");
      $message="Password changed!";
    }
    else{
      $message="Wrong password!";
    }
  }
  else{
    $message="New password do not match!";
  }
}
header('profile.php');

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="bg">
        <div class="container">
          <h3>Change Password</h3>
          <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="inputPassword">Current password</label>
                    <input type="password" class="form-control" id="password" name="currentpassword" required><br>
                    <label for="inputPassword">Enter a new password</label>
                    <input type="password" class="form-control" id="password" name="newpassword" required><br>
                    <label for="inputPassword">Confirm new password</label>
                    <input type="password" class="form-control" id="password" name="confirmpassword" required>
                </div>
                <button type="submit" value="Submit" name="submit" class="btn btn-info">Update password</button>
            </form>
            <div class="msg">
                <?php if(isset($message)) { echo $message; } ?>
            </div>
                    </div>
          </div>
        </div>
    </div>
</body>

</html>