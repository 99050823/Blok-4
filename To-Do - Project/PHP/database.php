<?php

    function clear ($conn, $val) {
        return mysqli_real_escape_string($conn, $val);
    }

    function sendList($param, $conn) {
        try {
            $stmt = "INSERT INTO lists (list_name) VALUES ('".clear($conn, $param)."')";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function sendTodo($title, $description, $time, $status, $list, $conn) {
        try {
            $stmt = "INSERT INTO todo_items (todo_title, todo_text, duration, status, list) 
            VALUES ('".clear($conn, $title)."', '".clear($conn, $description)."', '".clear($conn, $time)."', '".clear($conn, $status)."', '".clear($conn, $list)."')";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getLists($conn) {
        try {
            $stmt = "SELECT id, list_name FROM lists";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function getSingleList($conn, $id) {
        try {
            $stmt = "SELECT list_name FROM lists WHERE id=".$id."";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function getSingleTodo($conn, $id) {
        try {
            $stmt = "SELECT * FROM todo_items WHERE id='".$id."'";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function deleteSingle ($id, $location, $conn) {
        try {
            $stmt = "DELETE FROM $location WHERE id='".$id."'";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getTodo($conn, $list) {
        try {
            $stmt = "SELECT * FROM todo_items WHERE list='".$list."'";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function getTodoCount($conn, $list) {
        try {
            $stmt = "SELECT COUNT(id) AS row_count FROM todo_items WHERE list='".$list."'";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function getListCount ($conn) {
        try {
            $stmt = "SELECT COUNT(id) AS row_count FROM lists";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function editTodo($conn, $id, $title, $description, $duration) {
        try {
            $stmt = "UPDATE todo_items 
            SET todo_title='".clear($conn, $title)."', todo_text='".clear($conn, $description)."', duration='".clear($conn, $duration)."'
            WHERE id='".clear($conn, $id)."'";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function editStatus($conn, $status, $id) {
        try {
            $stmt = "UPDATE todo_items 
            SET status='".$status."'
            WHERE id='".$id."'";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function filterStatus($conn) {
        try { 
            $stmt = "SELECT * FROM todo_items WHERE status='Done'";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function filterDuration($conn, $type) {
        try {
            $stmt = "SELECT * FROM todo_items
            ORDER BY duration $type";
            $result = mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $result;
    }

    function deleteTodo($conn, $list) {
        try {
            $stmt = "DELETE FROM todo_items WHERE list='".$list."'";
            mysqli_query($conn, $stmt);
        } catch(mysqli_sql_exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>