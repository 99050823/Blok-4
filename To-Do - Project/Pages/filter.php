<?php

    $type = $_GET['filterType'];

    if ($type == "status") {
        $items = filterStatus($conn);
    } else if($type == "duration") {
        $items = filterDuration($conn);
    }

    echo "<h2>Filter ".$type."</h2>";

    while ($row = $items->fetch_assoc()) {
        echo "<p>".$row['todo_title']."</p>";
    }
?>