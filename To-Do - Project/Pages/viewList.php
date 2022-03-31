<?php

    $id = $_GET['id'];
    $list = getSingleList($conn, $id);
    $row = $list->fetch_assoc();
    $name = $row['list_name'];

    $todo = getTodo($conn, $name);
 
    echo "<div class='list-view'>
        <h2>".$name."</h2>
    <ul id='to-do'>";

    while ($row = $todo->fetch_assoc()) {
        echo "<div>
            <li>
                <a class='list-anchor' href='index.php?pagina=viewTodo&id=".$row['id']."'>
                    ".$row['todo_title']."
                </a>
            </li>

            <a href='index.php?pagina=editTodo&id=".$row['id']."'>
                <i class='fa-solid fa-pen-to-square'></i>
            </a>
            
            <a href='index.php?pagina=delete&id=".$row['id']."&type=todo_items&name=".$row['todo_title']."'>
                <i class='fa-solid fa-trash-can'></i>
            </a>
        </div>";
    }

    echo "</ul>
        <a href='index.php?pagina=addTodo&list=".$name."'>Add To-Do</a>
    </div>";

    echo "<script src='./Script/script.js'></script>"
?>