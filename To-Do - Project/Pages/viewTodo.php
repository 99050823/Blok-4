<?php

    $id = $_GET['id'];
    $submit = $_POST['submit'];
    
    if ($submit) {
        $status = $_POST['status'];
        editStatus($conn, $status, $id);
    }

    $todo = getSingleTodo($conn, $id);

    // function checkStatus ($status) {
    //     if ($status == "Done") {
            
    //     }
    // }

    while ($row = $todo->fetch_assoc()) {
        $status = $row['status'];
        // checkStatus($status);

        echo "<div class='todo-view'>
            <h2>".$row['todo_title']."</h2>
            <br>
            <p>Description: ".$row['todo_text']."</p>
            <p>Duratiton: ".$row['duration']."</p>
            <p>".$status."</p>
            <br>
            <h3>Status:</h3>
            <form method='post'>
                <input type='radio' name='status' value='In Progress'>
                <label for=check1>In Progress</label>
                <br>
                <input type='radio' name='status' value='Done'>
                <label for=check2>Done</label>
                <br>
                <br>
                <input type='submit' name='submit'>
            </form>
        </div>";
    }
?>