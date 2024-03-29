<?php
//add our database connection script
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

//process the form
if(isset($_POST['signupBtn'])){
    //initialize an array to store any error message from the form
    $form_errors = array();

    //Form validation
    $required_fields = array('email', 'username', 'password');

    //call the function to check empty field and merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    //Fields that requires checking for minimum length
    $fields_to_check_length = array('username' => 4, 'password' => 6);

    //call the function to check minimum required length and merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

    //email validation / merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_email($_POST));

    //collect form data and store in variables 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];  

    if(checkDuplicateEntries("users", "email", $email, $db)){
        $result = flashMessage("Email is already taken, please try another one");
    }
    if(checkDuplicateEntries("users", "username", $username, $db)){
        $result = flashMessage("Username is already taken, please try another one");
    }
    //check if error array is empty, if yes process form data and insert record
    else if(empty($form_errors)){
        //hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        try{

            //create SQL insert statement
            $sqlInsert = "INSERT INTO users (username, email, password, join_date)
              VALUES (:username, :email, :password, now())";

            //use PDO prepared to sanitize data
            $statement = $db->prepare($sqlInsert);

            //add the data into the database
            $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));

            //check if one new row was created
            if($statement->rowCount() == 1){
                //call sweet alert
                $result = "<script type=\"text/javascript\"> 
                            swal({
                            title: \"Congratulations $username!\",
                            text: \"Registration Completed Successfully.\",
                            type: 'success',
                            showButtonText: \"Thank You!\" });
                        </script>";
            }
        }catch (PDOException $ex){
            $result = flashMessage("An error occurred: " .$ex->getMessage());
        }
    }
    else{
        if(count($form_errors) == 1){
            $result = flashMessage("There was 1 error in the form<br>");
        }else{
            $result = flashMessage("There were " .count($form_errors). " errors in the form <br>");
        }
    }

}
?>