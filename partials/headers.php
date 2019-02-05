<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php if(isset($page_title)) echo $page_title; ?></title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <script src="js/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">


</head>
<body>

<!--    STILL NEED TO ADD THE NAV BAR CODE IN HERE    -->
<div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav"><i class="hide"><?php echo guard(); ?></li>
      <li><a href="index.php">Home</a></li>
            <?php if(isset($_SESSION['username'])) || isCookieValid($db))): ?>
                  <li><a href="profile.php">My Profile</a></li> 
                  <li><a href="logout.php">Logout</a></li> 
            <?php else: ?>
                  <li><a href="#about">About</a></li> 
                  <li><a href="login.php">Login</a></li> 
            <?php endif ?>
      </ul>
</div>







</body>

