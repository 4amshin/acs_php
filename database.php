<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "acs_crud";
    $con = new mysqli($serverName, $userName, $password, $dbName);

    if(!$con) {
        die(mysqli_error($con));
    } else {
        // echo "Database Terhubung";
    }

?>