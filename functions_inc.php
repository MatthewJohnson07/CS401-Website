<?php
    
    function emptyInputSignup($email, $username, $password){
        
        if(empty($username) || empty($email) || empty($password)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


    function invalidUsername($username){
        
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;

    }

    function invalidEmail($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;

    }

    function usernameExists($conn, $username, $email){
        $sql = "SELECT username FROM users WHERE username = ? OR email = ?;";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        $resultCheck = mysqli_stmt_num_rows($stmt);

        if($resultCheck > 0){
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }

        // mysqli_stmt_close($stmt);
    }

    function createUser($conn, $email, $username, $password){
        $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?);";      

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: signup.php?error=sqlerror");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_close($stmt);

        header("location: signup.php?error=none");
        exit();

    }

    function emptyInputLogin($email, $password){
        if(empty($email) || empty($password)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $email, $password){
        $userExists = usernameExists($conn, $email, $email);
        
        if($userExists == False){
            header("location: signup.php?loginerror=wronglogin");
            exit();
        }

        $sql = "SELECT id, username, email, password, user_privilege FROM users WHERE username = ? OR email = ?;";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $email);
        $stmt->execute();
        $stmt->store_result();

        $stmt->bind_result($getID, $getUsername, $getEmail, $getPassword, $getUserprivilege);

        if($stmt->fetch()){
            $pwdCheck = password_verify($password, $getPassword);

            if($pwdCheck == False){
                header("location: signup.php?loginerror=wrongpassword"); 
                exit();
            } else if($pwdCheck == True){
                session_start();
                $_SESSION['id'] = $getID;
                $_SESSION['username'] = $getUsername;
                $_SESSION['email'] = $getEmail;
                $_SESSION['user_privilege'] = $getUserprivilege;

                header("location: home.php?success=login");
                exit();

            } else {
                header("location: signup.php?loginerror=wrongpassword"); 
                exit();
            }
       
        } else {
            header("location: signup.php?loginerror=nouser");
            exit();
        }

    }

    function storePost($conn, $username, $title, $content){
        $sql = "INSERT INTO posting (username, title, postcontent) VALUES (?, ?, ?);";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: threads.php?error=sqlerror");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sss", $username, $title, $content);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_close($stmt);

        header("location: threads?error=none");
        exit();
    }

    function getPosts($connection) {
        try {
            $rows = $connection->query("select title, username, created_on from posting order by created_on desc", PDO::FETCH_ASSOC);
        } catch(Exception $e) {
          echo print_r($e,1);
          exit;
        }
        return $rows;
    }

    






?>