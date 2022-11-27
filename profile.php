
<!doctype html>
    <html lang="en">
      <head>
      <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">        
      <title>OBB&HC</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php
include_once 'connection.php';
require_once("signinnavbar.php");

session_start();

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
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $username ?>" />
                </div>

                <div class="form-group">
                    <label for="text">E-mail</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $email ?>" />
                </div>

                <div class="form-group">
                    <label for="text">Phone number</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $phone ?>" />
                </div>

                <div class="form-group">
                    <label for="text">City</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $city ?>" />
                </div>

                <div class="form-group">
                    <label for="text">Gender</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $gender ?>" />
                </div>

                <div class="form-group">
                    <label for="text">qualification</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $qualification ?>" />
                </div>

                <div class="form-group">
                    <label for="text">file</label>
                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $file ?>" />
                </div>

                <a class="btn btn-primary" href="changepassword.php">Change password</a>

                



  </form>
  </div>
  </div>
</body>
</html>