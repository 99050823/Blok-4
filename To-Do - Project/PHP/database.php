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

    function getSingleTodo($conn, $id) {
        try {
            $stmt = "SELECT * FROM todo_items WHERE id='".$id."'";
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

    function getTodo($conn, $list) {
        try {
            $stmt = "SELECT * FROM todo_items WHERE list='".$list."'";
            $result = $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function editTodo($conn, $id, $title, $description, $duration) {
        try {
            $stmt = "UPDATE todo_items 
            SET todo_title='".$title."', todo_text='".$description."', duration='".$duration."'
            WHERE id='".$id."'";
            $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function editStatus($conn, $status, $id) {
        try {
            $stmt = "UPDATE todo_items 
            SET status='".$status."'
            WHERE id='".$id."'";
            $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function filterStatus($conn) {
        try { 
            $stmt = "SELECT * FROM todo_items WHERE status='Done'";
            $result = $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function filterDuration($conn) {
        try {
            $stmt = "SELECT * FROM todo_items
            ORDER BY duration ASC";
            $result = $conn->query($stmt);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }
?>