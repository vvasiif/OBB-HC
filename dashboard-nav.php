<?php 
require_once('connection.php');
session_start();

include_once 'postnav.php';
$role = $_SESSION["role"];
echo $role;

if($role == "con")
{
    header("Location: consultant_dashboard.php");
}
else if($role == "adm")
{
    header("Location: admin_dashboard.php");
}
else if($role == "pat")
{
    
    header("Location: patient_dashboard.php");
}

?>