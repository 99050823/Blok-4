<?php
    $id = $_GET['id'];
    $submit = $_POST['submit'];
    $page = $_GET['pagina'];

    if ($submit) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $time = $_POST['time'];

        editTodo($conn, $id, $title, $description, $time);
        header("Location: index.php");
    }

    echo "<form method='post'>
        <label>Title : </label>
        <input name='title' type='text'> <br>

        <label>Description : </label>
        <textarea name='description'></textarea> <br>

        <label>Duration : </label>
        <input name='time' type='time'> <br>

        <input name='submit' type='submit'> 
    </form>";

?>