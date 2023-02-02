<!-- Delete account -->

<?php 

require_once('connection.php');
session_start();

$userid = $_GET['id'];

mysqli_query($conn, "DELETE FROM users  WHERE userid='" . $userid . "'");
header("Location: signout.php");

?>