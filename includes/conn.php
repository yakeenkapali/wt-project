<?php
    $hostname="localhost"
    $username="root"
    $password=""
    $dbname="kurakani"

    $conn_mysqli($hostname,$username,$password,$dbname):

    if(!$conn){
        die("Connection Failed". mysqli_connect_error()):
    }
?>