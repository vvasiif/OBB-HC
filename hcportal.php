<!-- Health consultant portal -->


<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}

if ($_SESSION['email'] == null) {
    include_once 'prenav.php';
} else {
    include_once 'postnav.php';
}

$dermatologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Dermatologist'  && availability = 'available' && status = 'accept' ";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $dermatologist = $dermatologist + 1;
}

$immunologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Immunologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $immunologist = $immunologist + 1;
}

$gastroenterologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Gastroenterologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $gastroenterologist = $gastroenterologist + 1;
}

$hivspecialist = 0;
$query = "select * from users where role = 'con' && specialization = 'HIV specialist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $hivspecialist = $hivspecialist + 1;
}

$endocrinologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Endocrinologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $endocrinologist = $endocrinologist + 1;
}

$primarycarephysician = 0;
$query = "select * from users where role = 'con' && specialization = 'Primary care physician'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $primarycarephysician = $primarycarephysician + 1;
}

$pulmonologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Pulmonologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $pulmonologist = $pulmonologist + 1;
}

$cardiologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Cardiologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $cardiologist = $cardiologist + 1;
}

$neurologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Neurologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $neurologist = $neurologist + 1;
}

$orthopedic = 0;
$query = "select * from users where role = 'con' && specialization = 'Orthopedic'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $orthopedic= $orthopedic + 1;
}

$neurosurgeon = 0;
$query = "select * from users where role = 'con' && specialization = 'Neurosurgeon'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $neurosurgeon = $neurosurgeon + 1;
}

$infectiousdiseasespecialist = 0;
$query = "select * from users where role = 'con' && specialization = 'Infectious Disease Specialist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $infectiousdiseasespecialist = $infectiousdiseasespecialist + 1;
}

$familymedicine = 0;
$query = "select * from users where role = 'con' && specialization = 'Family Medicine'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $familymedicine = $familymedicine + 1;
}

$proctologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Proctologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $proctologist = $proctologist + 1;
}

$phlebologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Phlebologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $phlebologist = $phlebologist + 1;
}

$orthopedicsurgeon = 0;
$query = "select * from users where role = 'con' && specialization = 'Orthopedic Surgeon'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $orthopedicsurgeon = $orthopedicsurgeon + 1;
}

$rheumatologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Rheumatologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $rheumatologist = $rheumatologist + 1;
}

$ent = 0;
$query = "select * from users where role = 'con' && specialization = 'ENT'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $ent = $ent + 1;
}

$urologist = 0;
$query = "select * from users where role = 'con' && specialization = 'Urologist'  && availability = 'available' && status = 'accept'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($run)) {
    $urologist = $urologist + 1;
}

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="bg">
        <div class="container">
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <div class="col-lg-12 list-btn">
                        <!-- <h3>Use Dr Bot to get consultant recommendation</h3> -->
                        <a href="bot.php"><button type="button" class="btn-large">Click here to get <em>Dr Bot</em>
                                doctor/consultant recommendation</button></a>
                    </div><br>
                    <h4 style="color: black; text-align:center">OR</h4><em>
                        <input type="text" id="myInput" onkeyup="myFunction()"
                            placeholder="Find a doctor/consultant by speciality">
                        <div style="height: 300px; overflow:scroll">
                            <ul id="myUL">

                                <li><a href="specialitylist.php?specialization=Dermatologist"><button type="button"
                                            class="btn-large">Dermatologist
                                            <?php echo "(" . $dermatologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Immunologist"><button type="button"
                                            class="btn-large">Immunologist
                                            <?php echo "(" . $immunologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Gastroenterologist"><button type="button"
                                            class="btn-large">Gastroenterologist
                                            <?php echo "(" . $gastroenterologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=HIV specialist"><button type="button"
                                            class="btn-large">HIV Specialist
                                            <?php echo "(" . $hivspecialist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Endocrinologist"><button type="button"
                                            class="btn-large">Endocrinologist
                                            <?php echo "(" . $endocrinologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Primary care physician"><button
                                            type="button" class="btn-large">Primary Care Physician
                                            <?php echo "(" . $primarycarephysician . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Pulmonologist"><button type="button"
                                            class="btn-large">Pulmonologist
                                            <?php echo "(" . $pulmonologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Cardiologist"><button type="button"
                                            class="btn-large">Cardiologist
                                            <?php echo "(" . $cardiologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Neurologist"><button type="button"
                                            class="btn-large">Neurologist
                                            <?php echo "(" . $neurologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Orthopedic"><button
                                            type="button" class="btn-large">Orthopedic
                                            <?php echo "(" . $orthopedic . " available)" ?></button></a>
                                </li>
                                <li><a href="specialitylist.php?specialization=Neurosurgeon"><button type="button"
                                            class="btn-large">Neurosurgeon
                                            <?php echo "(" . $neurosurgeon . " available)" ?></button></a></li>

                                <li><a href="specialitylist.php?specialization=Infectious Disease Specialist"><button
                                            type="button" class="btn-large">Infectious Disease Specialist
                                            <?php echo "(" . $infectiousdiseasespecialist . " available)" ?></button></a>
                                </li>
                                <li><a href="specialitylist.php?specialization=Family Medicine"><button type="button"
                                            class="btn-large">Family Medicine
                                            <?php echo "(" . $familymedicine . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Proctologist"><button type="button"
                                            class="btn-large">Proctologist
                                            <?php echo "(" . $proctologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Phlebologist"><button type="button"
                                            class="btn-large">Phlebologist
                                            <?php echo "(" . $phlebologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Orthopedic Surgeon"><button type="button"
                                            class="btn-large">Orthopedic Surgeon
                                            <?php echo "(" . $orthopedicsurgeon . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Rheumatologist"><button type="button"
                                            class="btn-large">Rheumatologist
                                            <?php echo "(" . $rheumatologist . " available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=ENT"><button type="button"
                                            class="btn-large">ENT <?php echo "(" . $ent . " available)" ?></button></a>
                                </li>
                                <li><a href="specialitylist.php?specialization=Urologist"><button type="button"
                                            class="btn-large">Urologist
                                            <?php echo "(" . $urologist . " available)" ?></button></a></li>
                            </ul>
                        </div>
                        <!-- https://www.verywellhealth.com/types-of-doctors-1736311 -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>