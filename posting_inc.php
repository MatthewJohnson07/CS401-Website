<?php
    session_start();

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    if(isset($_POST['post-submit'])){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $username = $_SESSION['username'];
        
        /* Sanitize data */
        $title = stripcslashes($title);
        $content = stripcslashes($content);
        $username = stripcslashes($username);
        $title = mysqli_real_escape_string($conn, $title);
        $content = mysqli_real_escape_string($conn, $content);
        $password = mysqli_real_escape_string($conn, $password);

        storePost($conn, $username, $title, $content);
        header("location:threads.php?success=posted");
        exit();
        
    } else {
        header("location:threads.php?error=notsubmitted");
        exit();
    }


?>