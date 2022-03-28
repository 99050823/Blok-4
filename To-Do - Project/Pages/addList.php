<?php
    $submit = $_POST['submit'];

    if ($submit) {
        $listName = $_POST['list-name'];
        sendList($listName, $conn);
        header("Location: index.php");
    }

    echo "<form method='post'>
        <label>List Name : </label>
        <input name='list-name' type='text'> <br>
        
        <input name='submit' type='submit' value='Submit'>
    </form>";

?>