<!-- Recomment consultant after disease prediction -->

<?php
require_once 'connection.php';
include_once 'postnav.php';

$email = $_SESSION['email'];

if ($_SESSION['log'] == "yes") {
    include_once 'postnav.php';
} else {
    header("Location: signin.php");
}


$email = $_SESSION['email'];


$result = $_GET['result'];

$result = trim($result);


switch ($result) {
    case "Fungal infection":
        $specialization = "Dermatologist";
        break;
    case "Allergy":
        $specialization = "Immunologist";
        break;
    case "GERD":
        $specialization = "Gastroenterologist";
        break;
    case "Chronic cholestasis":
        $specialization = "Gastroenterologist";
        break;
    case "Drug Reaction":
        $specialization = "Dermatologist";
        break;
    case "Peptic ulcer diseae":
        $specialization = "Gastroenterologist";
        break;
    case "AIDS":
        $specialization = "HIV specialist";
        break;
    case "Diabetes":
        $specialization = "Endocrinologist";
        break;
    case "Gastroenteritis":
        $specialization = "Primary care physician";
        break;
    case "Bronchial Asthma":
        $specialization = "Pulmonologist";
        break;
    case "Hypertension":
        $specialization = "Hypertension";
        break;
    case "Migraine":
        $specialization = "Migraine";
        break;
    case "Cervical spondylosis":
        $specialization = "Cervical spondylosis";
        break;
        case "Paralysis (brain hemorrhage)":
            $specialization = "Paralysis (brain hemorrhage)";
            break;
        case "Jaundice":
            $specialization = "Jaundice";
            break;
        case "Malaria":
            $specialization = "Malaria";
            break;
        case "Chicken pox":
            $specialization = "Chicken pox";
            break;
        case "Dengue":
            $specialization = "Dengue";
            break;
        case "Typhoid":
            $specialization = "Typhoid";
            break;
        case "hepatitis A":
            $specialization = "hepatitis A";
            break;
        case "Hepatitis B":
            $specialization = "Hepatitis B";
            break;
        case "Hepatitis C":
            $specialization = "Hepatitis C";
            break;
        case "Hepatitis D":
            $specialization = "Hepatitis D";
            break;
        case "Hepatitis E":
            $specialization = "Hepatitis E";
            break;
        case "Alcoholic hepatitis":
            $specialization = "Alcoholic hepatitis";
            break;
            case "Tuberculosis":
                $specialization = "Tuberculosis";
                break;
            case "Common Cold":
                $specialization = "Common Cold";
                break;
            case "Pneumonia":
                $specialization = "Pneumonia";
                break;
            case "Dimorphic hemmorhoids(piles)":
                $specialization = "Dimorphic hemmorhoids(piles)";
                break;
            case "Heart attack":
                $specialization = "Heart attack";
                break;
            case "Varicose veins":
                $specialization = "Varicose veins";
                break;
            case "Hypothyroidism":
                $specialization = "Hypothyroidism";
                break;
            case "Hyperthyroidism":
                $specialization = "Hyperthyroidism";
                break;
            case "Hypoglycemia":
                $specialization = "Hypoglycemia";
                break;
                case "Osteoarthristis":
                    $specialization = "Osteoarthristis";
                    break;
                case "Arthritis":
                    $specialization = "Arthritis";
                    break;
                case "(vertigo) Paroymsal Positional Vertigo":
                    $specialization = "(vertigo) Paroymsal Positional Vertigo";
                    break;
                case "Acne":
                    $specialization = "Acne";
                    break;
                case "Urinary tract infection":
                    $specialization = "Urinary tract infection";
                    break;
                case "Psoriasis":
                    $specialization = "Psoriasis";
                    break;
                case "Impetigo":
                    $specialization = "Impetigo";
                    break;
                
                default:
                $specialization = "Not found";
    }

?>

<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <h3>Book your appointment with professional <?php echo $specialization ?></h3>
        <div class="row">
        <?php
        $count = 0;
                $query = "select * from users where role = 'con' && specialization = '$specialization' && status = 'accept'";
                $run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($run)){
                    $count = $count + 1;
                    ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/placeholder.jpg" class="card-img-top" alt=""><br><br>
                        <p class="con-name"><?php echo $row['username'] ?></h4></p>
                        <p class="con-spec"><?php echo $row['specialization'] ?></p>
                        <p class="con-spec"><?php echo "Experience: " . $row['experience'] . " years" ?></p>
                        <p class="con-spec"><?php echo "Fee: " . $row['fee'] . " PKR" ?></p>
                        <p class="con-spec"><?php echo "Rating: "?></p>

                        <a class="btn btn-info" href="bookappointment.php?id=<?php echo $row['userid']; ?>">Book appointment</a>                        
                    </div>
                </div>
            </div>
            <?php } $message = $count . " doctors/consultants found for $specialization!" ?>
        </div>

           <p class="msg"> <?php if(isset($message)) { if($count < 1)  { echo $message; } } ?> </p> 


    </div>

</body>

</html>