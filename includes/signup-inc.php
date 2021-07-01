<?php
    if(isset($_POST["button2"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $reppassword = $_POST["password2"];

        require_once 'conn.php';
        require_once 'function-inc.php';

        if(emptyinputsignup($name $email, $username, $password, $reppassword) !== false){
            header("location: ../html/signup.php?error=emptyinput");
            exit();
        }

        
        if(invalidusername($username) !== false){
            header("location: ../html/signup.php?error=invaliduseranme");
            exit();
        }

        
        if(invalidemail($email) !== false){
            header("location: ../html/signup.php?error=invalidemail");
            exit();
        }

        
        if(passwordmatch($password, $reppassword) !== false){
            header("location: ../html/signup.php?error=passworddontmatch");
            exit();
        }

        if(usernameexists($conn, $username, $email) !== false){
            header("location: ../html/signup.php?error=usernametaken");
            exit();
        }

        createuser($conn, $name, $email, $username, $password);
    }
    else{
        header("location: ../html/signup.php");
        exit();
    }
?>