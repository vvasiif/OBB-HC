
<!doctype html>
    <html lang="en">
      <head>

</head>

<?php
include_once 'connection.php';
require_once("postnav.php");

$email = $_SESSION['email'];

$query = "select * from users where email='$email'";
$run = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($run)){
    $username = $row['username'];
    $password = $row['password'];
    $dob = $row['dob'];
    $city = $row['city'];
    $cnic = $row['cnic'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $qualification = $row['qualification'];
    $file = $row['file'];
    $role = $row['role'];
}
$_SESSION['role'] = $role;


?>

<body>
  <div class="bg">
  <div class="container">
  <h3>Your Details</h3>
  <form action="">
  <div class="form-group">
                    <label for="text">Name</label>
                    <h4><?php echo $username ?></h4>
                </div>
                

                <div class="form-group">
                    <label for="text">E-mail</label>
                    <h4><?php echo $email ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">Date of birth</label>
                    <h4><?php echo $dob ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">CNIC</label>
                    <h4><?php echo $cnic ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">Phone number</label>
                    <h4><?php echo $phone ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">City</label>
                    <h4><?php echo $city ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">Gender</label>
                    <h4><?php echo $gender ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">Qualification</label>
                    <h4><?php echo $qualification ?></h4>
                </div>

                <div class="form-group">
                    <label for="text">File</label>
                    <h4><?php echo $file ?></h4>
                </div>

                <a class="btn btn-light" href="changepassword.php">Change password</a>
                <a class="btn btn-primary" href="profilenav.php">Edit details</a> <br>

  </form>
  </div>
  </div>
</body>
</html>