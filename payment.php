<!-- Payment gateway -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}

$appid = $_GET['appid'];
$fee = $_GET['fee'];


if($_SERVER['REQUEST_METHOD']=="POST")
{
$payment = "yes";
mysqli_query($conn, "UPDATE appointments set payment='" . $payment . "' WHERE appointmentid='" . $appid . "'");
header("Location: myappointments.php");

}

?>
<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container smallcontainer">
        <h3>Payment</h3><br>
        <div class="card card-style1 border-0">
            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Full name on the card</p>
                            <input class="form-control mb-3" type="text" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Card Number</p>
                            <input class="form-control mb-3" type="text" maxlength="16" placeholder="**** **** **** ****" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiry</p>
                            <input class="form-control mb-3" type="text" pattern="\d{2}/\d{2}" placeholder="MM/YY" required>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV/CVC</p>
                            <input class="form-control mb-3 pt-2 " maxlength="3" type="password" placeholder="***" required>
                        </div>
                    </div>
                    <div class="col-12">
                        
                        <form action="" method="post">
                            <div class="form-group">
                            <button style="margin-top: 0px;" type="submit" value="Submit" name="submit"
                                class="btn btn-info"> <span class="ps-3">Pay Rs. <?php echo $fee; ?></span>
                            <span class="fas fa-arrow-right"></span></button>
                        </div>
                        </form>

                           
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>