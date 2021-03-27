<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'DAO.php';

    $dao = new Dao();
    $SESSION['authenticated'] = $dao->userExist($email, $password);

    if($_SESSION['authenticated']){
        header('Location: baseballthread.php');
        exit;
    } else {
        header('Location: login.php');
        exit; 
    }

?>