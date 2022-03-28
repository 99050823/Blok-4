<?php

    $id = $_GET['id'];
    $list = getSingleList($conn, $id);

    while($row = $list->fetch_assoc()) {
        echo "<div class='list-view'>
            <h2>".$row['list_name']."</h2>
            <ul>
                <li>TO-DO</li>       
            </ul>

            <a href='index.php?pagina=addTodo&list=".$row['list_name']."'>Add To-Do</a>
        </div>";
    }   
?>