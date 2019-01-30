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


</head>


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="index.php">MMOProject</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li>
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <?php if(!isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Register</a>
                </li>
               <li class="nav-item">
                   <a class="nav-link" href="contact.php">Contact Us</a>
               </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                <?php endif ?>
        </ul>
    </div>
</nav>

<!-- jquery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
<?php  ob_end_flush(); ?>







<!-- Cover page layout- much simpler look -->
<!-- <body>
  <body class="text-center">
     <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
   <header class="masthead mb-auto">
     <div class="inner">
       <h3 class="masthead-brand">Cover</h3>
       <nav class="nav nav-masthead justify-content-center">
         <a class="nav-link active" href="#">Home</a>
         <a class="nav-link" href="#">Features</a>
         <a class="nav-link" href="#">Contact</a>
       </nav>
     </div>
   </header>

   <main role="main" class="inner cover">
     <h1 class="cover-heading">Cover your page.</h1>
     <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
     <p class="lead">
       <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
     </p>
   </main>

   <footer class="mastfoot mt-auto">
     <div class="inner">
       <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
     </div>
   </footer>
 </body> -->
<!-- END of Cover page layout- much simpler look -->
