
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
    $city = $row['city'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $qualification = $row['qualification'];
    $file = $row['file'];
}


?>

<body>
  <div class="bg">
  <div class="conatiner">
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

                <a class="btn btn-primary" href="changepassword.php">Change password</a>
  </form>
  </div>
  </div>
</body>
</html>