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
    !empty($_POST["date0"]);
    !empty($_POST["date1"]);
    !empty($_POST["time0"]);
    !empty($_POST["time1"]);
    !empty($_POST["sex"]);
    !empty($_POST["accepted-terms-and-conditions"]);
    !empty($_POST["package"]);

    $package = ($_POST["package"]);
    $PWR = ($_POST["person-who-recommend"]);
    $gcash = ($_POST["gcash"]);
    $fn = ($_POST["fullname"]);
    $pn = ($_POST["phone-number"]);
    $loc = ($_POST["location"]);

    $date0 = ($_POST["date0"]);
    $date1 = ($_POST["date1"]);
    
    $sdate = date("Y-m-d", strtotime($date0));
    $edate = date("Y-m-d", strtotime($date1));    

    $stime = ($_POST["time0"]);
    $etime = ($_POST["time1"]);
    $sex = ($_POST["sex"]);    
    $terms_and_conditions = ($_POST["accepted-terms-and-conditions"]);
    $data_created = date("F j, Y, g:i a");
    
    $query1 = "INSERT INTO resort.client VALUES (0,'$PWR', '$package','$fn', '$pn', '$sdate', '$edate', '$stime', '$etime', '$loc', '$sex', '$terms_and_conditions', null, '$data_created')";
    if(!empty($gcash)){
        $query2 = "INSERT INTO resort.`person-who-recommend` VALUES(0,'$PWR', '$gcash', '$package', 800)";
        $recordData1 = mysqli_query($connectionString, $query2);
    }
    $recordData = mysqli_query($connectionString, $query1);

    if($recordData || $recordData1){
        echo "<script>window.location = 'http://localhost:8080/resort/index.html'</script>";
        exit;
    }
    else
    {
        echo "<script>window.location = 'http://localhost:8080/resort/reservation.html'</script>";
        exit;
    }
    
?>