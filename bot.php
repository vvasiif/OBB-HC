<!-- Dr Bot page -->

<?php
require_once 'connection.php';
include_once('postnav.php');

$email = $_SESSION['email'];

if($_SESSION['log'] == "yes") { 
    include_once 'postnav.php';
  }
  else {
    header("Location: signin.php");
  }

$email = $_SESSION['email'];

$query = "select status from appointments where pat_email = '$email'";
$run = mysqli_query($conn, $query);
if ($row = mysqli_fetch_array($run)) {
    if ($row["status"] == "new" || $row["status"] == "booked") {
        $msg = "You already have an appointment booked!";
        header("Location: myappointments.php?msg= <?php echo $msg ?> ");
}
}

$query = "select * from users where email='$email'";
$run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($run)) {
$username = $row['username'];
$password = $row['password'];
$dob = $row['dob'];
$city = $row['city'];
$cnic = $row['cnic'];
$phone = $row['phone'];
$gender = $row['gender'];
$qualification = $row['qualification'];
$file = $row['file'];
$role = $row['role'];
$picture_filename = $row['image'];

}
$_SESSION['role'] = $role;

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Your Details</h3><br>
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-4 mb-lg-4">
                                <?php echo '<img src="pics/'.$picture_filename .'" height="300px" width="300px" alt="...">'; ?>
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Name:
                                        </span><?php echo $username ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">E-mail:
                                        </span><?php echo $email ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">CNIC:
                                        </span><?php echo $cnic ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">City:
                                        </span><?php echo $city ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">DoB:
                                        </span><?php echo $dob ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Gender:
                                        </span><?php echo $gender ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Phone:
                                        </span><?php echo $phone ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 style="text-align: left; margin-left: 15px">Select three symptoms you're having</h3>



        <form action="drbotresult.php" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <select id="" class="form-control" name="sym1" required>
                                <option value="">Symptom 1</option>
                                <option value="itching">Itching</option>
                                <option value="skin_rash">Skin rash</option>
                                <option value="nodal_skin_eruptions">Nodal skin eruptions</option>
                                <option value="continuous_sneezing">Continuous sneezing</option>
                                <option value="shivering">Shivering</option>
                                <option value="chills">Chills</option>
                                <option value="joint_pain">Joint pain</option>
                                <option value="stomach_pain">Stomach pain</option>
                                <option value="acidity">Acidity</option>
                                <option value="ulcers_on_tongue">Ulcers on tongue</option>
                                <option value="muscle_wasting">Muscle wasting</option>
                                <option value="vomiting">Vomiting</option>
                                <option value="burning_micturition">Burning micturition</option>
                                <option value="spotting_ urination">Spotting urination</option>
                                <option value="fatigue">Fatigue</option>
                                <option value="weight_gain">Weight gain</option>
                                <option value="anxiety">Anxiety</option>
                                <option value="cold_hands_and_feets">Cold hands and feets</option>
                                <option value="mood_swings">Mood swings</option>
                                <option value="weight_loss">Weight loss</option>
                                <option value="restlessness">Restlessness</option>
                                <option value="lethargy">Lethargy</option>
                                <option value="patches_in_throat">Patches in throat</option>
                                <option value="irregular_sugar_level">Irregular sugar level</option>
                                <option value="cough">Cough</option>
                                <option value="high_fever">High fever</option>
                                <option value="sunken_eyes">Sunken eyes</option>
                                <option value="breathlessness">Breathlessness</option>
                                <option value="sweating">Sweating</option>
                                <option value="dehydration">Dehydration</option>
                                <option value="indigestion">Indigestion</option>
                                <option value="headache">Headache</option>
                                <option value="yellowish_skin">Yellowish skin</option>
                                <option value="dark_urine">Dark urine</option>
                                <option value="nausea">Nausea</option>
                                <option value="loss_of_appetite">Loss of appetite</option>
                                <option value="pain_behind_the_eyes">Pain behind the eyes</option>
                                <option value="back_pain">Back pain</option>
                                <option value="constipation">Constipation</option>
                                <option value="abdominal_pain">Abdominal pain</option>
                                <option value="diarrhoea">Diarrhoea</option>
                                <option value="mild_fever">Mild_fever</option>
                                <option value="yellow_urine">Yellow urine</option>
                                <option value="yellowing_of_eyes">Yellowing of eyes</option>
                                <option value="acute_liver_failure">Acute liver failure</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="swelling_of_stomach">Swelling of stomach</option>
                                <option value="swelled_lymph_nodes">Swelled lymph nodes</option>
                                <option value="malaise">Malaise</option>
                                <option value="blurred_and_distorted_vision">Blurred and distorted vision</option>
                                <option value="phlegm">Phlegm</option>
                                <option value="throat_irritation">Throat irritation</option>
                                <option value="redness_of_eyes">Redness of eyes</option>
                                <option value="sinus_pressure">Sinus pressure</option>
                                <option value="runny_nose">Runny nose</option>
                                <option value="congestion">Congestion</option>
                                <option value="chest_pain">Chest_pain</option>
                                <option value="weakness_in_limbs">Weakness in limbs</option>
                                <option value="fast_heart_rate">Fast heart rate</option>
                                <option value="pain_during_bowel_movements">Pain during bowel movements</option>
                                <option value="pain_in_anal_region">Pain in anal region</option>
                                <option value="bloody_stool">Bloody stool</option>
                                <option value="irritation_in_anus">Irritation in anus</option>
                                <option value="neck_pain">Neck pain</option>
                                <option value="dizziness">Dizziness</option>
                                <option value="cramps">Cramps</option>
                                <option value="bruising">Bruising</option>
                                <option value="obesity">Obesity</option>
                                <option value="swollen_legs">Swollen legs</option>
                                <option value="swollen_blood_vessels">Swollen blood vessels</option>
                                <option value="puffy_face_and_eyes">Puffy face and eyes</option>
                                <option value="enlarged_thyroid">Enlarged thyroid</option>
                                <option value="brittle_nails">Brittle nails</option>
                                <option value="swollen_extremeties">Swollen extremeties</option>
                                <option value="excessive_hunger">Excessive hunger</option>
                                <option value="extra_marital_contacts">Extra marital contacts</option>
                                <option value="drying_and_tingling_lips">Drying and tingling lips</option>
                                <option value="slurred_speech">Slurred speech</option>
                                <option value="knee_pain">Knee pain</option>
                                <option value="hip_joint_pain">Hip joint pain</option>
                                <option value="muscle_weakness">Muscle weakness</option>
                                <option value="stiff_neck">Stiff neck</option>
                                <option value="swelling_joints">Swelling joints</option>
                                <option value="movement_stiffness">Movement stiffness</option>
                                <option value="spinning_movements">Spinning movements</option>
                                <option value="loss_of_balance">Loss of balance</option>
                                <option value="unsteadiness">Unsteadiness</option>
                                <option value="weakness_of_one_body_side">Weakness of one body side</option>
                                <option value="loss_of_smell">Loss of smell</option>
                                <option value="bladder_discomfort">Bladder discomfort</option>
                                <option value="foul_smell_of urine">Foul smell of urine</option>
                                <option value="continuous_feel_of_urine">Continuous feel of urine</option>
                                <option value="passage_of_gases">Passage of gases</option>
                                <option value="internal_itching">Internal itching</option>
                                <option value="toxic_look_(typhos)">Toxic look(typhos)</option>
                                <option value="depression">Depression</option>
                                <option value="irritability">Irritability</option>
                                <option value="muscle_pain">Muscle pain</option>
                                <option value="altered_sensorium">Altered sensorium</option>
                                <option value="red_spots_over_body">Red spots over body</option>
                                <option value="belly_pain">Belly pain</option>
                                <option value="abnormal_menstruation">Abnormal menstruation</option>
                                <option value="dischromic _patches">Dischromic patches</option>
                                <option value="watering_from_eyes">Watering from eyes</option>
                                <option value="increased_appetite">Increased appetite</option>
                                <option value="polyuria">Polyuria</option>
                                <option value="family_history">Family history</option>
                                <option value="mucoid_sputum">Mucoid sputum</option>
                                <option value="rusty_sputum">Rusty sputum</option>
                                <option value="lack_of_concentration">Lack of concentration</option>
                                <option value="visual_disturbances">Visual disturbances</option>
                                <option value="receiving_blood_transfusion">Receiving blood transfusion</option>
                                <option value="receiving_unsterile_injections">Receiving unsterile injections</option>
                                <option value="coma">Coma</option>
                                <option value="stomach_bleeding">Stomach bleeding</option>
                                <option value="distention_of_abdomen">Distention of abdomen</option>
                                <option value="history_of_alcohol_consumption">History of alcohol consumption</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="blood_in_sputum">Blood in sputum</option>
                                <option value="prominent_veins_on_calf">Prominent veins on calf</option>
                                <option value="palpitations">Palpitations</option>
                                <option value="painful_walking">Painful walking</option>
                                <option value="pus_filled_pimples">Pus filled pimples</option>
                                <option value="blackheads">Blackheads</option>
                                <option value="scurring">Scurring</option>
                                <option value="skin_peeling">Skin peeling</option>
                                <option value="silver_like_dusting">Silver like dusting</option>
                                <option value="small_dents_in_nails">Small dents in nails</option>
                                <option value="inflammatory_nails">Inflammatory nails</option>
                                <option value="blister">Blister</option>
                                <option value="red_sore_around_nose">Red sore around nose</option>
                                <option value="yellow_crust_ooze">Yellow crust ooze</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <select id="" class="form-control" name="sym2" required>
                                <option value="">Symptom 2</option>
                                <option value="itching">Itching</option>
                                <option value="skin_rash">Skin rash</option>
                                <option value="nodal_skin_eruptions">Nodal skin eruptions</option>
                                <option value="continuous_sneezing">Continuous sneezing</option>
                                <option value="shivering">Shivering</option>
                                <option value="chills">Chills</option>
                                <option value="joint_pain">Joint pain</option>
                                <option value="stomach_pain">Stomach pain</option>
                                <option value="acidity">Acidity</option>
                                <option value="ulcers_on_tongue">Ulcers on tongue</option>
                                <option value="muscle_wasting">Muscle wasting</option>
                                <option value="vomiting">Vomiting</option>
                                <option value="burning_micturition">Burning micturition</option>
                                <option value="spotting_ urination">Spotting urination</option>
                                <option value="fatigue">Fatigue</option>
                                <option value="weight_gain">Weight gain</option>
                                <option value="anxiety">Anxiety</option>
                                <option value="cold_hands_and_feets">Cold hands and feets</option>
                                <option value="mood_swings">Mood swings</option>
                                <option value="weight_loss">Weight loss</option>
                                <option value="restlessness">Restlessness</option>
                                <option value="lethargy">Lethargy</option>
                                <option value="patches_in_throat">Patches in throat</option>
                                <option value="irregular_sugar_level">Irregular sugar level</option>
                                <option value="cough">Cough</option>
                                <option value="high_fever">High fever</option>
                                <option value="sunken_eyes">Sunken eyes</option>
                                <option value="breathlessness">Breathlessness</option>
                                <option value="sweating">Sweating</option>
                                <option value="dehydration">Dehydration</option>
                                <option value="indigestion">Indigestion</option>
                                <option value="headache">Headache</option>
                                <option value="yellowish_skin">Yellowish skin</option>
                                <option value="dark_urine">Dark urine</option>
                                <option value="nausea">Nausea</option>
                                <option value="loss_of_appetite">Loss of appetite</option>
                                <option value="pain_behind_the_eyes">Pain behind the eyes</option>
                                <option value="back_pain">Back pain</option>
                                <option value="constipation">Constipation</option>
                                <option value="abdominal_pain">Abdominal pain</option>
                                <option value="diarrhoea">Diarrhoea</option>
                                <option value="mild_fever">Mild_fever</option>
                                <option value="yellow_urine">Yellow urine</option>
                                <option value="yellowing_of_eyes">Yellowing of eyes</option>
                                <option value="acute_liver_failure">Acute liver failure</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="swelling_of_stomach">Swelling of stomach</option>
                                <option value="swelled_lymph_nodes">Swelled lymph nodes</option>
                                <option value="malaise">Malaise</option>
                                <option value="blurred_and_distorted_vision">Blurred and distorted vision</option>
                                <option value="phlegm">Phlegm</option>
                                <option value="throat_irritation">Throat irritation</option>
                                <option value="redness_of_eyes">Redness of eyes</option>
                                <option value="sinus_pressure">Sinus pressure</option>
                                <option value="runny_nose">Runny nose</option>
                                <option value="congestion">Congestion</option>
                                <option value="chest_pain">Chest_pain</option>
                                <option value="weakness_in_limbs">Weakness in limbs</option>
                                <option value="fast_heart_rate">Fast heart rate</option>
                                <option value="pain_during_bowel_movements">Pain during bowel movements</option>
                                <option value="pain_in_anal_region">Pain in anal region</option>
                                <option value="bloody_stool">Bloody stool</option>
                                <option value="irritation_in_anus">Irritation in anus</option>
                                <option value="neck_pain">Neck pain</option>
                                <option value="dizziness">Dizziness</option>
                                <option value="cramps">Cramps</option>
                                <option value="bruising">Bruising</option>
                                <option value="obesity">Obesity</option>
                                <option value="swollen_legs">Swollen legs</option>
                                <option value="swollen_blood_vessels">Swollen blood vessels</option>
                                <option value="puffy_face_and_eyes">Puffy face and eyes</option>
                                <option value="enlarged_thyroid">Enlarged thyroid</option>
                                <option value="brittle_nails">Brittle nails</option>
                                <option value="swollen_extremeties">Swollen extremeties</option>
                                <option value="excessive_hunger">Excessive hunger</option>
                                <option value="extra_marital_contacts">Extra marital contacts</option>
                                <option value="drying_and_tingling_lips">Drying and tingling lips</option>
                                <option value="slurred_speech">Slurred speech</option>
                                <option value="knee_pain">Knee pain</option>
                                <option value="hip_joint_pain">Hip joint pain</option>
                                <option value="muscle_weakness">Muscle weakness</option>
                                <option value="stiff_neck">Stiff neck</option>
                                <option value="swelling_joints">Swelling joints</option>
                                <option value="movement_stiffness">Movement stiffness</option>
                                <option value="spinning_movements">Spinning movements</option>
                                <option value="loss_of_balance">Loss of balance</option>
                                <option value="unsteadiness">Unsteadiness</option>
                                <option value="weakness_of_one_body_side">Weakness of one body side</option>
                                <option value="loss_of_smell">Loss of smell</option>
                                <option value="bladder_discomfort">Bladder discomfort</option>
                                <option value="foul_smell_of urine">Foul smell of urine</option>
                                <option value="continuous_feel_of_urine">Continuous feel of urine</option>
                                <option value="passage_of_gases">Passage of gases</option>
                                <option value="internal_itching">Internal itching</option>
                                <option value="toxic_look_(typhos)">Toxic look(typhos)</option>
                                <option value="depression">Depression</option>
                                <option value="irritability">Irritability</option>
                                <option value="muscle_pain">Muscle pain</option>
                                <option value="altered_sensorium">Altered sensorium</option>
                                <option value="red_spots_over_body">Red spots over body</option>
                                <option value="belly_pain">Belly pain</option>
                                <option value="abnormal_menstruation">Abnormal menstruation</option>
                                <option value="dischromic _patches">Dischromic patches</option>
                                <option value="watering_from_eyes">Watering from eyes</option>
                                <option value="increased_appetite">Increased appetite</option>
                                <option value="polyuria">Polyuria</option>
                                <option value="family_history">Family history</option>
                                <option value="mucoid_sputum">Mucoid sputum</option>
                                <option value="rusty_sputum">Rusty sputum</option>
                                <option value="lack_of_concentration">Lack of concentration</option>
                                <option value="visual_disturbances">Visual disturbances</option>
                                <option value="receiving_blood_transfusion">Receiving blood transfusion</option>
                                <option value="receiving_unsterile_injections">Receiving unsterile injections</option>
                                <option value="coma">Coma</option>
                                <option value="stomach_bleeding">Stomach bleeding</option>
                                <option value="distention_of_abdomen">Distention of abdomen</option>
                                <option value="history_of_alcohol_consumption">History of alcohol consumption</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="blood_in_sputum">Blood in sputum</option>
                                <option value="prominent_veins_on_calf">Prominent veins on calf</option>
                                <option value="palpitations">Palpitations</option>
                                <option value="painful_walking">Painful walking</option>
                                <option value="pus_filled_pimples">Pus filled pimples</option>
                                <option value="blackheads">Blackheads</option>
                                <option value="scurring">Scurring</option>
                                <option value="skin_peeling">Skin peeling</option>
                                <option value="silver_like_dusting">Silver like dusting</option>
                                <option value="small_dents_in_nails">Small dents in nails</option>
                                <option value="inflammatory_nails">Inflammatory nails</option>
                                <option value="blister">Blister</option>
                                <option value="red_sore_around_nose">Red sore around nose</option>
                                <option value="yellow_crust_ooze">Yellow crust ooze</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2">
                            <select id="" class="form-control" name="sym3" required>
                                <option value="">Symptom 3</option>
                                <option value="itching">Itching</option>
                                <option value="skin_rash">Skin rash</option>
                                <option value="nodal_skin_eruptions">Nodal skin eruptions</option>
                                <option value="continuous_sneezing">Continuous sneezing</option>
                                <option value="shivering">Shivering</option>
                                <option value="chills">Chills</option>
                                <option value="joint_pain">Joint pain</option>
                                <option value="stomach_pain">Stomach pain</option>
                                <option value="acidity">Acidity</option>
                                <option value="ulcers_on_tongue">Ulcers on tongue</option>
                                <option value="muscle_wasting">Muscle wasting</option>
                                <option value="vomiting">Vomiting</option>
                                <option value="burning_micturition">Burning micturition</option>
                                <option value="spotting_ urination">Spotting urination</option>
                                <option value="fatigue">Fatigue</option>
                                <option value="weight_gain">Weight gain</option>
                                <option value="anxiety">Anxiety</option>
                                <option value="cold_hands_and_feets">Cold hands and feets</option>
                                <option value="mood_swings">Mood swings</option>
                                <option value="weight_loss">Weight loss</option>
                                <option value="restlessness">Restlessness</option>
                                <option value="lethargy">Lethargy</option>
                                <option value="patches_in_throat">Patches in throat</option>
                                <option value="irregular_sugar_level">Irregular sugar level</option>
                                <option value="cough">Cough</option>
                                <option value="high_fever">High fever</option>
                                <option value="sunken_eyes">Sunken eyes</option>
                                <option value="breathlessness">Breathlessness</option>
                                <option value="sweating">Sweating</option>
                                <option value="dehydration">Dehydration</option>
                                <option value="indigestion">Indigestion</option>
                                <option value="headache">Headache</option>
                                <option value="yellowish_skin">Yellowish skin</option>
                                <option value="dark_urine">Dark urine</option>
                                <option value="nausea">Nausea</option>
                                <option value="loss_of_appetite">Loss of appetite</option>
                                <option value="pain_behind_the_eyes">Pain behind the eyes</option>
                                <option value="back_pain">Back pain</option>
                                <option value="constipation">Constipation</option>
                                <option value="abdominal_pain">Abdominal pain</option>
                                <option value="diarrhoea">Diarrhoea</option>
                                <option value="mild_fever">Mild_fever</option>
                                <option value="yellow_urine">Yellow urine</option>
                                <option value="yellowing_of_eyes">Yellowing of eyes</option>
                                <option value="acute_liver_failure">Acute liver failure</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="swelling_of_stomach">Swelling of stomach</option>
                                <option value="swelled_lymph_nodes">Swelled lymph nodes</option>
                                <option value="malaise">Malaise</option>
                                <option value="blurred_and_distorted_vision">Blurred and distorted vision</option>
                                <option value="phlegm">Phlegm</option>
                                <option value="throat_irritation">Throat irritation</option>
                                <option value="redness_of_eyes">Redness of eyes</option>
                                <option value="sinus_pressure">Sinus pressure</option>
                                <option value="runny_nose">Runny nose</option>
                                <option value="congestion">Congestion</option>
                                <option value="chest_pain">Chest_pain</option>
                                <option value="weakness_in_limbs">Weakness in limbs</option>
                                <option value="fast_heart_rate">Fast heart rate</option>
                                <option value="pain_during_bowel_movements">Pain during bowel movements</option>
                                <option value="pain_in_anal_region">Pain in anal region</option>
                                <option value="bloody_stool">Bloody stool</option>
                                <option value="irritation_in_anus">Irritation in anus</option>
                                <option value="neck_pain">Neck pain</option>
                                <option value="dizziness">Dizziness</option>
                                <option value="cramps">Cramps</option>
                                <option value="bruising">Bruising</option>
                                <option value="obesity">Obesity</option>
                                <option value="swollen_legs">Swollen legs</option>
                                <option value="swollen_blood_vessels">Swollen blood vessels</option>
                                <option value="puffy_face_and_eyes">Puffy face and eyes</option>
                                <option value="enlarged_thyroid">Enlarged thyroid</option>
                                <option value="brittle_nails">Brittle nails</option>
                                <option value="swollen_extremeties">Swollen extremeties</option>
                                <option value="excessive_hunger">Excessive hunger</option>
                                <option value="extra_marital_contacts">Extra marital contacts</option>
                                <option value="drying_and_tingling_lips">Drying and tingling lips</option>
                                <option value="slurred_speech">Slurred speech</option>
                                <option value="knee_pain">Knee pain</option>
                                <option value="hip_joint_pain">Hip joint pain</option>
                                <option value="muscle_weakness">Muscle weakness</option>
                                <option value="stiff_neck">Stiff neck</option>
                                <option value="swelling_joints">Swelling joints</option>
                                <option value="movement_stiffness">Movement stiffness</option>
                                <option value="spinning_movements">Spinning movements</option>
                                <option value="loss_of_balance">Loss of balance</option>
                                <option value="unsteadiness">Unsteadiness</option>
                                <option value="weakness_of_one_body_side">Weakness of one body side</option>
                                <option value="loss_of_smell">Loss of smell</option>
                                <option value="bladder_discomfort">Bladder discomfort</option>
                                <option value="foul_smell_of urine">Foul smell of urine</option>
                                <option value="continuous_feel_of_urine">Continuous feel of urine</option>
                                <option value="passage_of_gases">Passage of gases</option>
                                <option value="internal_itching">Internal itching</option>
                                <option value="toxic_look_(typhos)">Toxic look(typhos)</option>
                                <option value="depression">Depression</option>
                                <option value="irritability">Irritability</option>
                                <option value="muscle_pain">Muscle pain</option>
                                <option value="altered_sensorium">Altered sensorium</option>
                                <option value="red_spots_over_body">Red spots over body</option>
                                <option value="belly_pain">Belly pain</option>
                                <option value="abnormal_menstruation">Abnormal menstruation</option>
                                <option value="dischromic _patches">Dischromic patches</option>
                                <option value="watering_from_eyes">Watering from eyes</option>
                                <option value="increased_appetite">Increased appetite</option>
                                <option value="polyuria">Polyuria</option>
                                <option value="family_history">Family history</option>
                                <option value="mucoid_sputum">Mucoid sputum</option>
                                <option value="rusty_sputum">Rusty sputum</option>
                                <option value="lack_of_concentration">Lack of concentration</option>
                                <option value="visual_disturbances">Visual disturbances</option>
                                <option value="receiving_blood_transfusion">Receiving blood transfusion</option>
                                <option value="receiving_unsterile_injections">Receiving unsterile injections</option>
                                <option value="coma">Coma</option>
                                <option value="stomach_bleeding">Stomach bleeding</option>
                                <option value="distention_of_abdomen">Distention of abdomen</option>
                                <option value="history_of_alcohol_consumption">History of alcohol consumption</option>
                                <option value="fluid_overload">Fluid overload</option>
                                <option value="blood_in_sputum">Blood in sputum</option>
                                <option value="prominent_veins_on_calf">Prominent veins on calf</option>
                                <option value="palpitations">Palpitations</option>
                                <option value="painful_walking">Painful walking</option>
                                <option value="pus_filled_pimples">Pus filled pimples</option>
                                <option value="blackheads">Blackheads</option>
                                <option value="scurring">Scurring</option>
                                <option value="skin_peeling">Skin peeling</option>
                                <option value="silver_like_dusting">Silver like dusting</option>
                                <option value="small_dents_in_nails">Small dents in nails</option>
                                <option value="inflammatory_nails">Inflammatory nails</option>
                                <option value="blister">Blister</option>
                                <option value="red_sore_around_nose">Red sore around nose</option>
                                <option value="yellow_crust_ooze">Yellow crust ooze</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <button style="margin-top: 0px;" type="submit" value="Submit" name="submit"
                                class="btn btn-info">Predict disease</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>