<?php
    if(isset($_POST["button2"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $reppassword = $_POST["reppassword"];
    
        require_once 'conn.php';
        require_once 'function-inc.php';
        
        
        if(emptyinputs($name, $email, $username, $password, $reppassword) !== false){
            //header("Location: ../html/signup.php?error=emptyinputs");
            //var_dump($_POST);
            echo gettype($reppassword);
            exit();
        }
         

        
        if(invalidusername($username) !== false){
            echo("1");
            header("Location: ../html/signup.php?error=invaliduseranme");
            exit();
        }

        
        if(invalidemail($email) !== false){
            echo("1");
            header("Location: ../html/signup.php?error=invalidemail");
            exit();
        }

       
        if(passwordmatch($password, $reppassword) !== false){
            echo($password);
            echo($reppassword);
            header("Location: ../html/signup.php?error=passworddontmatch");
            exit();
        } 
        

        if(usernameexists($conn, $username, $email) !== false){
            echo("1");
            header("Location: ../html/signup.php?error=usernametaken");
            exit();
        }

        createuser($conn, $name, $email, $username, $password);
    }
    else{
        header("Location: ../html/signup.php?error=none");
        exit();
    } 

?>