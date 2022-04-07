<?php

    $id = $_GET['id'];
    $submit = $_POST['submit'];
    
    if ($submit) {
        $stat = $_POST['status'];
        editStatus($conn, $stat, $id);
    }

    $todo = getSingleTodo($conn, $id);

    while ($row = $todo->fetch_assoc()) {
        $status = $row['status'];

        if ($status == 'Done') {
            $done = "type='radio' name='status' value='Done' checked";
            $inProgress = "type='radio' name='status' value='In Progress'";
        } else {
            $done = "type='radio' name='status' value='Done'";
            $inProgress = "type='radio' name='status' value='In Progress' checked";
        }

        echo "<div class='todo-view'>
            <h2>".$row['todo_title']."</h2>
            <br>
            <p>Description: ".$row['todo_text']."</p>
            <p>Duratiton: ".$row['duration']."</p>
            <br>
            <h3>Status:</h3>
            <form method='post'>
                <input ".$inProgress.">
                <label for=check1>In Progress</label>
                <br>
                <input ".$done.">
                <label for=check2>Done</label>
                <br>
                <br>
                <input type='submit' name='submit'>
            </form>
        </div>";
    }
?>