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
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="bbportal.php"><button type="button" class="btn-large">Blood Bank Portal</button></a>
            </div>
            <div class="col-lg-6">
                <a href="hcportal.php"><button type="button" class="btn-large">Health Consultant Portal</button></a>
            </div>
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