<?php

    $servername = "localhost";
    $username = "root";
    $password = "password";    

    $connectionString = new mysqli($servername,$username,$password);


    !empty($_POST["person-who-recommend"]);
    !empty($_POST["gcash"]);
    !empty($_POST["fullname"]);
    !empty($_POST["phone-number"]);
    !empty($_POST["location"]);
    !empty($_POST["date"]);
    !empty($_POST["time"]);
    !empty($_POST["sex"]);
    !empty($_POST["accepted-terms-and-conditions"]);

    $PWR = ($_POST["person-who-recommend"]);
    $gcash = ($_POST["gcash"]);
    $fn = ($_POST["fullname"]);
    $pn = ($_POST["phone-number"]);
    $loc = ($_POST["location"]);
    $date = ($_POST["date"]);
    $time = ($_POST["time"]);
    $sex = ($_POST["sex"]);
    $terms_and_conditions = ($_POST["accepted-terms-and-conditions"]);
    $data_created = date("F j, Y, g:i a");


    $query1 = "INSERT INTO resort.client VALUES (0,'$PWR', '$fn', '$pn', '$date', '$time', '$loc', '$sex', '$terms_and_conditions', null, '$data_created')";
    $query2 = "INSERT INTO resort.`person-who-recommend` VALUES(0,'$PWR', null, 'Package 1', null)";

    $recordData = mysqli_query($connectionString, $query1);
    $recordData1 = mysqli_query($connectionString, $query2);

    if($recordData && $recordData1){
        echo "<script>window.location = 'http://localhost:8080/resort/index.html'</script>";
        exit;
    }
    else
    {
        echo "<script>window.location = 'http://localhost:8080/resort/login.html'</script>";
        exit;
    }
    
?>