<?php

    function getAllUsers() {

        try {
            $conn = openDatabaseConnection();
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
        $result = $stmt->fetchAll();
        
        return $result;
    }

    function addUser ($name, $adress, $phone) {
        
        try {
            $conn = openDatabaseConnection();
            $stmt = $conn->prepare("INSERT INTO users (Name, Adress, Telephone) VALUES ('".$name."', '".$adress."', '".$phone."')");
            $stmt->execute();
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
    }

?>