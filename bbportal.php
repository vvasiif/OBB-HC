<?php
session_start();
require_once("signinnavbar.php");

// echo "Welcome " . $_SESSION['email'];
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">
    <title>OBB&HC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="bg">
        <div class="conatiner">
            <h3>Bllod Bank Portal</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="input">Blood Type</label><br>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Blood Type</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select><br> <br>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Find blood
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Donate blood
                </div>

                <button type="submit" value="Submit" name="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
    </div>
</body>



</html>