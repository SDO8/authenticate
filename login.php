

<?php
$page_title = "User Authentication - Login Page";
include_once 'partials/headers.php';
include_once 'partials/parseLogin.php';
?>

<div class="container">
    <section class="col col-lg-7">
        <h2>Login Form</h2><hr>
        <div>
        <?php if(isset($result)) echo $result; ?>
        <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>
        <form action="" method="post">
            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" name="password" class="form-control" id="passwordFiled" placeholder="Password">
            </div>

            <div class="checkbox">
                <label>
                    <input name="remember" value="yes" type="checkbox"> Remeber Me
                </label>
            </div>
            <a href="forgot_password.php">Forgot Password?</a>
            <button type="submit" name="loginBtn" class="btn btn-primary pull-right">Sign in</button>
        </form>
        <p><a href="index.php">Back</a> </p>
    </section>
</div>
<?php include_once 'partials/headers.php'; ?>
