<?php

if(isset($_POST["submit"])){
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

     /* Sanitize data before inserting into database */
    $email = stripcslashes($email);
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    if(emptyInputSignup($email, $username, $password) !== False){
        header("location: signup.php?error=emptyinput");
        exit();
    }

    if(invalidUsername($username) !== False){
        header("location: signup.php?error=invalidusername");
        exit();
    }

    if(invalidEmail($email) !== False){
        header("location: signup.php?error=invalidemail");
        exit();
    }

    if(usernameExists($conn, $username, $email) !== False){
        header("location: signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $password);

} else {
    header("location: signup.php");
}



?>