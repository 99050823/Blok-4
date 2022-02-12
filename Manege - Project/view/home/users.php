<?php

    $submit = $_POST['subButton'];

    if ($submit) {
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];

        createUser($name, $adress, $phone);
    }
?>

<section>
    <h2>Users</h2>

    <form method="post">
        <input name="name" type="text">
        <input name="adress" type="text">
        <input name="phone" type="text">

        <input name="subButton" type="submit" value="Add User">
    </form>

    <div class="users-panel">
        <?php

            $count = count($data);

            for ($i=0; $i < $count; $i++) { 
                echo "<div>".$data[$i]['UserName']."</div>";
            }

        ?>
    </div>
</section>