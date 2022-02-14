<?php

    $countUsers = count($data[0]);
    $countAnimal = count($data[1]);

    $submit = $_POST['subButton'];
    $id = $_GET['var'];

    if ($submit) {
        $user = $_POST['username'];
        $horse = $_POST['animalname'];
        $time = $_POST['time'];

        updateRide($id, $user, $horse, $time);
    }
?>

<section>
    <h2>Edit Ride</h2>

    <form method="post">
        <label for="username">User : </label>
        <select name="username">
            <?php  
                for ($i=0; $i < $countUsers; $i++) { 
                    echo "<option>".$data[0][$i]["UserName"]."</option>";
                }
            ?>
        </select><br>

        <label for="animalname">Horse : </label>
        <select name="animalname">
            <?php  
                for ($i=0; $i < $countAnimal; $i++) { 
                    echo "<option>".$data[1][$i]["AnimalName"]."</option>";
                }
            ?>
        </select><br>

        <label for="time">Time : </label>
        <input name="time" type="time"><br>

        <input name="subButton" type="submit" value="EDIT">
    </form>
</section>