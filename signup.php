

<?php
$page_title = "User Authentication - Register Page";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>

<div class="container">
    <section class="col col-lg-7">
        <h2>Registration Form</h2><hr>
        <div>
        <?php if(isset($result)) echo $result; ?>
        <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>
        <form action="" method="post">
            <div class="form-group">
                <label for="emailField">Email Address</label>
                <input type="email" class="form-control" name="email" id="emailField" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" name="password" class="form-control" id="passwordFiled" placeholder="Password">
            </div>

            <button type="submit" name="signupBtn" class="btn btn-primary pull-right">Signup</button>
        </form>
        <p><a href="index.php">Back</a> </p>
    </section>

</div>


<?php include_once 'partials/headers.php'; ?>
