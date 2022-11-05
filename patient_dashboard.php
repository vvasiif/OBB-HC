<?php
session_start();

// echo "Welcome " . $_SESSION['email'];
?>
<!doctype html>
    <html lang="en">
      <head>
      <link rel="stylesheet" type="text/css" href="style.css?v=<?=rand(1,1000)?>">        
      <title>OBB&HC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">OBB&HC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="signout.php">Sign Out</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>


</head>

<body>
    <div class="bg">
        <div class="conatiner-con">
        <table>
  <tr>
    <th><a href="bb.php"><button type="button" class="btn-large">Blood Bank Portal</button></a></th>
    <th><a href="hc.php"><button type="button" class="btn-large">Health Consultancy</button></a></th>
  </tr>
</table>
        </div>
    </div>
</body>



</html>