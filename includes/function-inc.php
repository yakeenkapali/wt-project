<?php

    function (emptyinputsignup($name, $email, $username, $password, $reppassword) {
        $result;
        if (empty($name) || empty($email) || empty($username) || empty($password) || empty($reppassword)){
            $result = true;
        }
        else{
            $result= false;
        }
        return $result;
    }

    function (invalidusername($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        }
        else{
            $result= false;
        }
        return $result;
    }

    
    function (invalidemail($email) ){
        $result;
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else{
            $result= false;
        }
        return $result;
    }

     
    function (passwordmatch($password, $reppassword)){
        $result;
        if ($password !== $reppassword) {
            $result = true;
        }
        else{
            $result= false;
        }
        return $result;
    }

    function (usernameexists($conn, $username, $email)){
        $sql = "SELECT  * FROM user WHERE userUid = ? OR userEmail =?;";
        $stmt = mysqli_stmt_init($conn); 
        
        if(mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../html/signup.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ss", $email, );
        mysqli_stmt_exeute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result= false;
            return $result;
        }
    }


    function createuser($conn, $name, $email, $username, $password){
        $sql = "INSERT INTO user (userName, userEmail, userUid, userPwd) VALUES (?,?,?,?);"
        $stmt = mysqli_stmt_init($conn); 
        
        if(mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../html/signup.php?error=stmtfailed");
            exit();
        }
        
        $hashedpassowrd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpassowrd );
        mysqli_stmt_exeute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../html/signup.php?error=none");
            exit();
    }


    

    