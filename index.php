<?php
$page_title = "User Authentication - Homepage";
include_once 'partials/headers.php';
include_once 'resource/session.php';
?>


<!-- sweet alert -->
<div class="container">
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script type="text/javascript">
    Swal({   title: "Good job!",    text: "You clicked the button!",    type: "error",    confirmButtonText:    "success" })
</script>
<!-- END of sweet alert -->

<body>
<?php $page_title = "User Authentication - Home Page"; ?>
<main role="main" class="container">
    <div class="home_main">
        <h1>Under Construction</h1>
        <p class="lead">This Site Is Under Construction<br> Please Check Again Later For Updates</p>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead">You Are Currently Not Signed In <a href="login.php">Login</a> Not Yet Registered? <a href="signup.php">Register</a> </P>
        <?php else: ?>
            <p class="lead">You Are Logged In As <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?> <a href="logout.php">Logout</a> </p>
        <?php endif ?>
    </div>
</main>


<!-- footer -->
<?php include_once 'partials/footers.php'?>
</body>
</html>
