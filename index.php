<?php
require_once 'connection.php';

session_start();

// echo "Welcome " . $_SESSION['email'];

if($_SESSION['email']==NULL) { 
  include_once('prenav.php');
}else{
  include_once('postnav.php');
}

?>
<!doctype html>
<html lang="en">

<body>
    <div class="bg">
        <div class="container">
            <table>
                <tr>
                    <th><a href="bbportal.php"><button type="button" class="btn-large">Blood Bank Portal</button></a></th>
                    <th><a href="hcportal.php"><button type="button" class="btn-large">Health Consultancy</button></a></th>
                </tr>
            </table>
        </div>
    </div>
</body>



</html>

<script type="text/javascript">
function preventBack() {
    window.history.forward();
}
setTimeout("preventBack()", 0);
window.onunload = function() {
    null
};
</script>