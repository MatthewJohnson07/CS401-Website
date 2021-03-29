<?php
    
    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        if(emptyInputLogin($email, $password) !== False){
            header("location: signup.php?loginerror=emptyinput");
            exit();
        }

        loginUser($conn, $email, $password);
        
    } else {
        header("location: signup.php?loginerror=nosubmit");
        exit();
    }


        

?>