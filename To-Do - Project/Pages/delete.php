<?php

    $type = $_GET['type'];
    $name = $_GET['name'];
    $id = $_GET['id'];
    $delete = $_POST['delete'];

    $todo = getTodoCount($conn, $name);
    $row = $todo->fetch_assoc();
    $rowCount = $row['row_count'];

    if ($delete) {
        deleteSingle($id, $type, $conn);

        if ($rowCount > 0) {
            deleteTodo($conn, $name);
        }

        header("Location: index.php");
    }

    echo "<p>Are you sure you want to delete ".$name."?</p>";
    echo "<a href='index.php' class='back'>Back</a>";
    echo "<form method='post'>
        <input name='delete' type='submit' value='Delete'>
    </form>";

?>