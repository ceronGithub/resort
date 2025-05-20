<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "resort";

    $connectionString = new mysqli($servername,$username,$password,$dbname);

    if($connectionString->connect_error)
    {
        die("Connection failed: " .$connectionString->connect_error);
    }
    else{
        echo "Connected successfully";
    }
?>