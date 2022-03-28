<?php
    function sendList($param, $conn) {
        try {
            $stmt = "INSERT INTO lists (list_name) VALUES ('".$param."')";
            $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function sendTodo($title, $description, $time, $status, $list, $conn) {
        try {
            $stmt = "INSERT INTO todo_items (todo_title, todo_text, duration, status, list) 
            VALUES ('".$title."', '".$description."', '".$time."', '".$status."', '".$list."')";
            $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getLists($conn) {
        try {
            $stmt = "SELECT id, list_name FROM lists";
            $result = $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function getSingleList($conn, $id) {
        try {
            $stmt = "SELECT list_name FROM lists WHERE id=".$id."";
            $result = $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function deleteSingle ($id, $location, $conn) {
        try {
            $stmt = "DELETE FROM $location WHERE id='".$id."'";
            $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>