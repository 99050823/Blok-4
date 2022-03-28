<?php

    $name = $_GET['list_name'];
    $id = $_GET['id'];
    $delete = $_POST['delete'];

    if ($delete) {
        deleteSingle($id, 'lists', $conn);
        header("Location: index.php");
    }

    echo "<p>Are you sure you want to delete ".$name."?</p>";
    echo "<a href='index.php' class='back'>Back</a>";
    echo "<form method='post'>
        <input name='delete' type='submit' value='Delete'>
    </form>";

?>