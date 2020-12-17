<?php
//IF this is set inside the code
if(isset($_POST["submit"])){
    
    //Grab the superglobals and store them
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    
    //Require the database handler and
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Error handling if any text input is empty
    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        //Exit() is to stop the script from running
        exit();
    }

    if(invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid");
        //Exit() is to stop the script from running
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        //Exit() is to stop the script from running
        exit();
    }

    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=pwdsnotequal");
        //Exit() is to stop the script from running
        exit();
    }

    if(uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        //Exit() is to stop the script from running
        exit();
    }

    //Create the user if everything's ok
    createUser($conn, $name, $email, $username, $pwd);
    
}else{
    //Send the user to the signup page 
    header("location: ../signup.php");
    exit();
}