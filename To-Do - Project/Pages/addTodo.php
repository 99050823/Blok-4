<?php
    $submit = $_POST['submit'];
    $list = $_GET['list'];

    if ($submit) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $time = $_POST['time'];
        $status = null;
        
        sendTodo($title, $description, $time, $status, $list, $conn);
        header("Location: index.php");
    }

    echo "<h2>Add a todo item</h2>";

    echo "<form class='todoForm' method='post'>
        <label>Title : </label>
        <input name='title' type='text'> <br>

        <label>Description : </label>
        <textarea name='description'></textarea> <br>

        <label>Duration : </label>
        <input name='time' type='time'> <br>

        <input name='submit' type='submit'> 
    </form>";

?>