<?php 
$page_title = "User Authentication - Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
?>

<div class="container">
    <div>
        <h1>Profile</h1>
        <?php if(!isset($_SESSION['username'])): ?>
        <p class="lead">You are not authorised to view this page <a href="login.php">Login</a>
            Not yet a member? <a href="signup.php">Signup</a> </p>
        <?php else: ?>
            <section class="col col-lg-7">

                <div class="row col-lg-3" style="margin-bottom: 10px;">
                    <img src="<?php if(isset($profile_picture)) echo $profile_picutre; ?>" class="img img-rounded" width="200">
                </div>

                <table class="table table-bordered table-condensed">
                    <tr><th stylr="...">Username:</th><td><?php if(isset($username)) echo $username; ?></td></tr>
                    <tr><th>Email:</th><td><?php if(isset($email)) echo $email; ?></td></tr>
                    <tr><th>Date Joined:</th><td><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
                    <tr><th></th><td><a class="pull-right" href="edit-profile.php?user_identify=<?php if(isset($encode_id)) echo $encode_id; ?>">
                                <span class="glyphicon glyphicon-edit"></span>Edit Profile</a></td></tr>
                </table>
            </section>
        <?php endif ?>
    </div>
</div>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>