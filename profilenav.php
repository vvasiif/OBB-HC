<?php 
include_once 'postnav.php';
$role = $_SESSION["role"];
// echo $role;

if($role == "con")
{
    header("Location: coneditdetails.php");
}
else
{
    
    header("Location: editdetails.php");
}

?>