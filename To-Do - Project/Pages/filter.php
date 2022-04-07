<?php

    $type = $_GET['filterType'];
    $timeFilter = $_GET['timeFilter'];

    if ($type == "status") {
        $items = filterStatus($conn);
    } else if($type == "duration" && $timeFilter == "ASC") {
        $items = filterDuration($conn, $timeFilter);
    } else if ($type == "duration" && $timeFilter == "DESC") {
        $items = filterDuration($conn, $timeFilter);
    }

    echo "<h2 style='margin-bottom:20px;'>Filter ".$type."</h2>";

    echo "<ul class='filteredList'>";

    while ($row = $items->fetch_assoc()) {
        echo "<li><a href='index.php?pagina=viewTodo&id=".$row['id']."'>"
            .$row['todo_title']."</a>
            <ul class='hover-popUp'>
                <li>".$row['duration']."</li>
                <li>".$row['status']."</li>
            </ul>
        </li>";
    }

    echo "</ul>";
?>