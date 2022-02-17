<?php
    $submit = $_POST['subButton'];

    if ($submit) {
        $name = $_POST['name'];
        $race = $_POST['race'];
        $age = $_POST['age'];

        createAnimal($name, $race, $age);
    }

    $deleteAll = $_POST['deleteAllBttn'];

    if ($deleteAll) {
        deleteAllFunc('rides', FALSE);
    }
?>

<section>
    <h2>Animal Management</h2>

    <form method="post">
        <label for="name">Horse Name : </label>
        <input name="name" type="text" required><br>

        <label for="race">Race : </label>
        <input name="race" type="text" required><br><br>

        <label for="age">Age : </label>
        <input name="age" type="number" required><br>

        <input name="subButton" type="submit" value="Add Horse">
    </form>
</section>

<div id="horsePanel" class="animal-panel">
    <?php
        $count = count($data);

        for ($i=0; $i < $count; $i++) { 
            
            echo "<div class='animal-block'>
                <h3>Animal ".$i."</h3>

                <p> Name : ".$data[$i]['AnimalName']."</p>
                <p> Race : ".$data[$i]['Race']."</p>
                <p> Age : ".$data[$i]['Age']."</p>
            </div>";   
        }
    ?>
</div>