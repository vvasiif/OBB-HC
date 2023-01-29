<!-- Blood bank portal -->

<?php
require_once 'connection.php';
include_once 'postnav.php';


if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

  $role = $_SESSION['role'];

$appid = $_GET['appid'];

if(isset($_POST["update"]))
{
    $status = $_POST['status'];
    mysqli_query($conn,"UPDATE appointments set status='" . $status . "' WHERE appointmentid='" . $appid . "'");
    header("Location: consultant_dashboard.php");
}



?>

<!doctype html>
<html lang="en">

<head>

    <style>
    .status {
        <?php if($role =='pat') {
            echo 'display:none';
        }
        ?>
    }
    </style>

</head>

<body>

    <div class="container">
        <h3 style="color: black;">Appointment session</h3>

        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <iframe src="https://meet.jit.si/<?php echo $appid ?>" frameborder="0" width="100%"
                                height="400">

                            </iframe>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="status">
                    <form action="" method="POST">
                        <label for="">Update appointment status at the end of the session</label>
                        <select id="inputGender" class="form-control" name="status" required>
                            <option value="none" selected>----</option>
                            <option value="completed">Completed</option>
                            <option value="absent">Didn't happen</option>
                        </select>
                        <br><button type="submit" value="update" name="update" class="btn btn-info">End session and
                            update status</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>