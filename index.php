<?php 
$page_title = "User Authentication - Homapage";
include_once 'partials/headers.php';
?>

<div class="container">

    <div class="flag">
        <h1>User Authentication System </h1><hr>
        <p class="lead">Learn to Code A login and registration System with PHP.<br>
            Enhance your PHP skills and make more cash.</p>

        <?php if(!isset($_SESSION['username'])): ?>
        <P>You are currently not signed in <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>
        <?php else: ?>
        <p>You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?> <a href="logout.php">Logout</a> </p>

        <?php endif ?>

        <?php echo $_SERVER['REMOTE_ADDR'] ."<br>". $_SERVER['HTTP_SER_AGENT'], 
            echo "<br>".time();
            if(isset($_SESSION['last_active'])){
                echo "<br>".$_SESSION['last_active'];
            };
        ?>

    </div>

</div>

<?php include_once 'partials/headers.php'; ?> 