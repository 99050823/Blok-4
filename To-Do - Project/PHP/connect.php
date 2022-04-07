<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "to-do";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    echo "<script>console.log('Succesfully Connected')</script>";
?>