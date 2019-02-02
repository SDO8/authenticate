
<?php
$page_title = "User Authentication - Password Reset";
include_once 'partials/headers.php';
include_once 'partials/parsePasswordReset.php';
?>

<div class="container">
    <section class="col col-lg-7">
        <h2>Reset Password Form</h2><hr>
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
                <label for="passwordField">New Password</label>
                <input type="password" name="new_password" class="form-control" id="passwordFiled" placeholder="New Password">
            </div>
            <div class="form-group">
                <label for="passwordField">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="passwordFiled" placeholder="Confirm Password">
            </div>

            <button type="submit" name="passwordResetBtn" class="btn btn-primary pull-right">Reset Password</button>
            <p><a href="login.php">Back to login page</a> </p>
        </form>
    </section>
</div>

<?php include_once 'partials/headers.php'; ?>
