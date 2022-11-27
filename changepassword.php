<?php
include_once 'connection.php';
require_once("postnav.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
  session_start();

$email = $_SESSION['email'];

echo $email;
    $newpassword = $_POST['password'];

    $query = "Select * FROM users WHERE email = ('$email')";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($run);

    $query = "UPDATE users SET password = '$newpassword'  where email= '$email'";
    echo '<script>alert("Password changes!")</script>';
    

    header("Location: profile.php");
    die;

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
                    <label for="inputPassword">Enter a new password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" value="Submit" name="submit" class="btn btn-primary">Update</button>
                </form>
  </div>
  </div>
</body>
</html>