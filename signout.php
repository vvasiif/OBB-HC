<?php

session_start();
if(isset($_SESSION['email'])){
    session_unset();
    session_destroy();
    header("location: signin.php");
}
else{
    header("location: signin.php");
}


?>