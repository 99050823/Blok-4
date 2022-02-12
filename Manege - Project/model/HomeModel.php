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

    function getNamesUsers() {

        try {
            $conn = openDatabaseConnection();
            $stmt = $conn->prepare("SELECT UserName FROM users");
            $stmt->execute();

        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
        $result = $stmt->fetchAll();
        
        return $result;
    }

    function getNamesAnimals() {

        try {
            $conn = openDatabaseConnection();
            $stmt = $conn->prepare("SELECT AnimalName FROM animals");
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
            $stmt = $conn->prepare("INSERT INTO users (UserName, Adress, Telephone) VALUES ('".$name."', '".$adress."', '".$phone."')");
            $stmt->execute();
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
    }

    function addRide ($user, $horse, $time) {

        try {
            $conn = openDatabaseConnection();
            $stmt = $conn->prepare("INSERT INTO rides (User, Horse, Time) VALUES ('".$user."', '".$horse."', '".$time."')");
            $stmt->execute();
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
    }


?>