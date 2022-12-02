<?php
include_once 'connection.php';
session_start();

$email = $_SESSION['email'];



if($email == NULL) { 
    header("Location: signin.php");
  }
  else{
    include_once 'postnav.php';
  }


  $query = "select * from users where email='$email'";
  $run = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($run)){
    $username = $row['username'];
    $password = $row['password'];
    $dob = $row['dob'];
    $city = $row['city'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $qualification = $row['qualification'];
    $file = $row['file'];
}


  
  if($_SERVER['REQUEST_METHOD']=="POST")
  {

    $bloodgroup = $_POST['bloodgroup'];
    $area = $_POST['area'];
    $available = "yes";

  $query = "insert into bloodbanklist (username,email,phone,bloodtype,city,area,available) value ('$username','$email','$phone','$bloodgroup','$city','$area','$available')";
  mysqli_query($conn, $query);
  // $message = "Donor listed!";
header("Location: available.php");
}

  
  
  ?>

<!doctype html>
<html lang="en">

<head>
<title>OBB&HC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label  for="inputPassword">Blood group</label><br>
                    <select name="bloodgroup">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select><br><br>
                    <label for="inputPassword">City</label>
                    <h4><?php echo $city ?></h4><br>
                    <label for="inputPassword">Area</label>
                    <input type="text" class="form-control" id="text" name="area" required><br>
                    </div>
                <button type="submit" value="Submit" name="submit" class="btn btn-primary">Post availability</button>
            </form>
            <div class="msg">
                <?php if(isset($message)) { echo $message; } ?>
            </div>
        </div>
</body>

</html>