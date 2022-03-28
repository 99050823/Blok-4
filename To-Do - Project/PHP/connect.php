<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "to-do";

    $conn = new mysqli($servername, $username, $password, $database);
    $testVal = "conn Test";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else { 
        echo "<script>console.log('Connected successfully')</script>";
    }

?>