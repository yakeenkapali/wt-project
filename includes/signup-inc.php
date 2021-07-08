<?php require_once 'conn.php'?>
<?php require_once 'function-inc.php'?>
<?php
    if(isset($_POST["button2"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $reppassword = $_POST["reppassword"];

        
        if(emptyinputs($name, $email, $username, $password, $reppassword) !== false){
            header("Location: ../html/signup.php?error=emptyinputs");
            exit();
        }
         

        
        if(invalidusername($username) !== false){
            header("Location: ../html/signup.php?error=invalidusername");
            exit();
        }

        
        if(invalidemail($email) !== false){
            header("Location: ../html/signup.php?error=invalidemail");
            exit();
        }

       
        if(passwordmatch($password, $reppassword) !== false){
            header("Location: ../html/signup.php?error=passworddontmatch");
            exit();
        } 
        

        if(usernameexists($conn, $username, $email) !== false){
           header("Location: ../html/signup.php?error=usernametaken");
           exit();
        }
        
        createuser($conn, $name, $email, $username, $password);  
    } 
?>