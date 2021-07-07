<?php 
require_once 'conn.php';
require_once 'function-inc.php';
?>

<?php


if(isset($_POST["button1"])){

    $username = $_POST["uid"];
    $password = $_POST["pwd"];
   

    if(emptyinputslogin($username, $password) !== false){
        header("Location: ../html/index.php?error=emptyinputs");
        //echo($username."<br>".$password);
        exit();
    }

    
    
else{
    loginUser($conn, $username, $password);
    header("location: ../html/messages.php");
    exit();
}
}
