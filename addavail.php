<?php
include_once 'connection.php';
include 'functions.php';
session_start();

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }


$email = $_SESSION['email'];


  $query = "select available from bloodbanklist where email = '$email'";
  $run = mysqli_query($conn,$query);
  if($row=mysqli_fetch_array($run)){
      if($row["available"]=="yes"){
          header("Location: available.php");
      }
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

    $bloodgroup = $_POST['bloodtype'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <h3>Post Your Availability On Portal</h3>
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="inputPassword">Blood group</label><br>
                        <select id="inputBloodtype" class="form-control" name="bloodtype">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select><br>
                        <label for="">City: <?php echo $city ?></label><br><br>
                        <label for="">Area</label>
                        <input type="text" class="form-control" id="text" name="area" required>
                    </div>
                    <button type="submit" value="Submit" name="submit" class="btn btn-info">Post
                        availability</button>
                </form>
                <div class="msg">
                    <?php if(isset($message)) { echo $message; } ?>
                </div><br>
            </div>
        </div><br>
        <h3>Blood Requests</h3>
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <table class="table-list col-lg-12">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Blood Group</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Requested</th>
                    </tr>
                    <tbody>
                        <?php
                $query = "select * from bloodrequestlist";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['bloodtype']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['area']; ?></td>
                            <td><?php echo timeAgo($row['dateadded']); ?></td>
                        </tr>
                        <?php  } 
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>