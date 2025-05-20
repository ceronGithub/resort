<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";    

    $connectionString = new mysqli($servername,$username,$password);

    // if($connectionString->connect_error)
    // {
    //     die("Connection failed: " .$connectionString->connect_error);
    // }
    // else{
    //     echo "Connected successfully";
    // }
?>