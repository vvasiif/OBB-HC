<!-- Sign in page -->

<?php
include_once 'connection.php';
require_once 'prenav.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select password from users where email = '$email'";
    $run = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_array($run)) {
        if ($password == $row['password']) {
            $query = "select role from users where email = '$email'";
            $run = mysqli_query($conn, $query);
            if ($row = mysqli_fetch_array($run)) {
                if ($row["role"] == "pat") {
                    $_SESSION['role'] = $row["role"];
                    $_SESSION['email'] = $email;
                    $_SESSION['log'] = "yes";
                    header("Location: patient_dashboard.php");
                    die;
                } elseif ($row["role"] == "con") {
                    $_SESSION['role'] = $row["role"];
                    $_SESSION['email'] = $email;
                    $_SESSION['log'] = "yes";
                    header("Location: consultant_dashboard.php");
                    die;
                } elseif ($row["role"] == "adm") {
                    $_SESSION['role'] = $row["role"];
                    $_SESSION['email'] = $email;
                    $_SESSION['log'] = "yes";
                    header("Location: admin_dashboard.php");
                    die;
                }
            }
        } else {
            $message = "You entered the wrong password!";
        }
    } else {
        $message = "Account do not exist!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>

</head>

<body>
        <div class="container smallcontainer">
            <form action="" method="POST">
                <div class="form-group">
                    <h3>Sign In</h3>
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                </div>
                <div class="form-group">
                <button type="submit" value="Submit" name="submit" class="btn btn-info">Sign in</button>
                </div>
            </form>
            <div class="msg">
                <?php if (isset($message)) {echo $message;}?>
            </div>

    </div>
</body>

</html>