<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php ';

if(isset($_POST['loginBtn'])){
    //array to hold errors
    $form_errors = array();

//validate
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if(empty($form_errors)){

        //collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];

        //check if user exist in the database
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $hashed_password = $row['password'];
           $username = $row['username'];

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               redirectTo('index');
           }else{
               $result = flashMessage("Invalid username or password");
           }
       }

    }else{
        if(count($form_errors) == 1){
            $result = flashMessage("There was one error in the form");
        }else{
            $result = flashMessage("There was " .count($form_errors). " error in the form");
        }
    }
}
?>

<?php
$page_title = "User Authentication - Login Page";
include_once 'partials/headers.php';
?>
<body>

<div role="main" class="container">
  <div class="login_main">
    <section class="col col-lg-7">
        <h2>Login Form</h2><hr>
        <div>
        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>

        <div class="clearfix"></div>
        <form action="" method="post">
            <div class="form-group">
                <label for="usernamerField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" class="form-control" name="password" id="passwordField" placeholder="Password">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group form-check">
                <label>
                    <input name="remember" type="checkbox"> Remember Me
                </label>
            </div>
                <a href="forgot_password.php">Forgot Password?</a>
                <button type="submit" name="loginBtn" class="btn btn-primary pull-right" style="float: right; ">Sign in</button>
          </form>
          <br><p><a href="index.php">Back</a> </p>
    </section>
</div>

<?php include_once 'partials/footers.php'; ?>

</body>
</html>
