<?php
include_once 'connection.php';
include_once 'postnav.php';

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$email = $_SESSION['email'];

$query = "select available from bloodrequestlist where email = '$email'";
            $run = mysqli_query($conn,$query);
            if($row=mysqli_fetch_array($run)){
                if($row["available"]=="yes"){
                    header("Location: deleterequest.php");
                }
            }

  $query = "select email from bloodrequestlist where email = '$email'";
  $run = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($run)){
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

if (isset($_POST['postrequest'])) {
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $requestid = rand(1111111,9999999);
    $bloodgroup = $_POST['bloodtype'];
    $area = $_POST['area'];
    $available = "yes";

  $query = "insert into bloodrequestlist (username,email,phone,bloodtype,city,area,requestid,available) value ('$username','$email','$phone','$bloodgroup','$city','$area','$requestid','$available')";
  mysqli_query($conn, $query);
header('Location: deleterequest.php');
}
}

if (isset($_GET['deleterequest'])) {

    $requestid = $_GET['requestid'];
    echo $requestid;
    mysqli_query($conn,"DELETE FROM bloodrequestlist WHERE requestid='" . $requestid . "'");

    // header("Location: addrequest.php");
} 


        
  ?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Post Blood Request</h3>
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

                        <label for="inputPassword">Area</label>
                        <input type="text" class="form-control" id="text" name="area" required>
                    </div>
                    <button type="submit" value="Submit" name="postrequest" class="btn btn-info">Post
                        request</button>
                </form>
                <div class="msg">
                    <?php if(isset($message)) { echo $message; } ?>
                </div>
            </div>
        </div>



    </div>
</body>

</html>