<?php
require_once 'connection.php';
session_start();

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['email']==NULL) { 
  include_once('prenav.php');
}else{
  include_once('postnav.php');
}
$familymedicine = 0;
 $query = "select * from users where role = 'con' && specialization = 'Family Medicine' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $familymedicine = $familymedicine + 1;
                }
                    
$internalmedicine = 0;
 $query = "select * from users where role = 'con' && specialization = 'Internal Medicine' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $internalmedicine = $internalmedicine + 1;
                }

                $Pediatrician = 0;
 $query = "select * from users where role = 'con' && specialization = 'Pediatrician' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Pediatrician = $Pediatrician + 1;
                }

                $Obstetricians = 0;
 $query = "select * from users where role = 'con' && specialization = 'Obstetricians/gynecologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Obstetricians = $Obstetricians + 1;
                }

                $Cardiologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Cardiologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Cardiologist = $Cardiologist + 1;
                }
                $Oncologist = 0;
                $query = "select * from users where role = 'con' && specialization = 'Oncologist' ";
                               $run = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_array($run)){
                                   $Oncologist = $Oncologist + 1;
                               }
                                   
               $Gastroenterologist = 0;
                $query = "select * from users where role = 'con' && specialization = 'Gastroenterologist' ";
                               $run = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_array($run)){
                                   $Gastroenterologist = $Gastroenterologist + 1;
                               }
               
                               $Pulmonologist = 0;
                $query = "select * from users where role = 'con' && specialization = 'Pulmonologist' ";
                               $run = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_array($run)){
                                   $Pulmonologist = $Pulmonologist + 1;
                               }
               
                               $Infectiousdisease = 0;
                $query = "select * from users where role = 'con' && specialization = 'Infectious disease' ";
                               $run = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_array($run)){
                                   $Infectiousdisease = $Infectiousdisease + 1;
                               }
               
                               $Nephrologist = 0;
                $query = "select * from users where role = 'con' && specialization = 'Nephrologist' ";
                               $run = mysqli_query($conn,$query);
                               while($row = mysqli_fetch_array($run)){
                                   $Nephrologist = $Nephrologist + 1;
                               }
                               $Endocrinologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Endocrinologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Endocrinologist = $Endocrinologist + 1;
                }
                    
$Ophthalmologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Ophthalmologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Ophthalmologist = $Ophthalmologist + 1;
                }

                $Otolaryngologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Otolaryngologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Otolaryngologist = $Otolaryngologist + 1;
                }

                $Dermatologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Dermatologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Dermatologist = $Dermatologist + 1;
                }

                $Psychiatrist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Psychiatrist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Psychiatrist = $Psychiatrist + 1;
                }
                $Radiologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Radiologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Radiologist = $Radiologist + 1;
                }
                    
$Neurologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Neurologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Neurologist = $Neurologist + 1;
                }

                $Anesthesiologist = 0;
 $query = "select * from users where role = 'con' && specialization = 'Anesthesiologist' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Anesthesiologist = $Anesthesiologist + 1;
                }

                $Surgeon = 0;
 $query = "select * from users where role = 'con' && specialization = 'Surgeon' ";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $Surgeon = $Surgeon + 1;
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
                                <li><a href="specialitylist.php?specialization=Family Medicine"><button type="button"
                                            class="btn-large">Family Medicine
                                            <?php echo "(". $familymedicine ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Internal Medicine"><button type="button"
                                            class="btn-large">Internal Medicine
                                            <?php echo "(". $internalmedicine ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Pediatrician"><button type="button"
                                            class="btn-large">Pediatrician
                                            <?php echo "(". $Pediatrician ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Obstetricians/gynecologist"><button
                                            type="button" class="btn-large">Obstetricians/gynecologist
                                            <?php echo "(". $Obstetricians ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Cardiologist"><button type="button"
                                            class="btn-large">Cardiologist
                                            <?php echo "(". $Cardiologist ." available)" ?></button></a></li>

                                <li><a href="specialitylist.php?specialization=Oncologist"><button type="button"
                                            class="btn-large">Oncologist
                                            <?php echo "(". $Oncologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Gastroenterologist"><button type="button"
                                            class="btn-large">Gastroenterologist
                                            <?php echo "(". $Gastroenterologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Pulmonologist"><button type="button"
                                            class="btn-large">Pulmonologist
                                            <?php echo "(". $Pulmonologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Infectious disease"><button type="button"
                                            class="btn-large">Infectious disease
                                            <?php echo "(". $Infectiousdisease ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Nephrologist"><button type="button"
                                            class="btn-large">Nephrologist
                                            <?php echo "(". $Nephrologist ." available)" ?></button></a></li>

                                <li><a href="specialitylist.php?specialization=Endocrinologist"><button type="button"
                                            class="btn-large">Endocrinologist
                                            <?php echo "(". $Endocrinologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Ophthalmologist"><button type="button"
                                            class="btn-large">Ophthalmologist
                                            <?php echo "(". $Ophthalmologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Otolaryngologist"><button type="button"
                                            class="btn-large">Otolaryngologist
                                            <?php echo "(". $Otolaryngologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Dermatologist"><button type="button"
                                            class="btn-large">Dermatologist
                                            <?php echo "(". $Dermatologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Psychiatrist"><button type="button"
                                            class="btn-large">Psychiatrist
                                            <?php echo "(". $Psychiatrist ." available)" ?></button></a></li>

                                <li><a href="specialitylist.php?specialization=Radiologist"><button type="button"
                                            class="btn-large">Radiologist
                                            <?php echo "(". $Radiologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Nephrologist"><button type="button"
                                            class="btn-large">Nephrologist
                                            <?php echo "(". $Nephrologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Neurologist"><button type="button"
                                            class="btn-large">Neurologist
                                            <?php echo "(". $Neurologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Anesthesiologist"><button type="button"
                                            class="btn-large">Anesthesiologist
                                            <?php echo "(". $Anesthesiologist ." available)" ?></button></a></li>
                                <li><a href="specialitylist.php?specialization=Surgeon"><button type="button"
                                            class="btn-large">Surgeon
                                            <?php echo "(". $Surgeon ." available)" ?></button></a>
                                </li>
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