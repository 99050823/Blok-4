<?php

    $submit = $_POST['subButton'];
    $deleteAll = $_POST['deleteAllBttn'];

    if ($submit) {
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];

        createUser($name, $adress, $phone);
    }

    if ($deleteAll) {
        deleteAllFunc('users');
    }
?>

<section>
    <h2>Users</h2>

    <form method="post">
        <label for="name">Username : </label>
        <input name="name" type="text"><br>

        <label for="adress">Adress : </label>
        <input name="adress" type="text"><br>

        <label for="phone">Telephone : </label>
        <input name="phone" type="text"><br>

        <input name="subButton" type="submit" value="Add User">
    </form>
</section>

<div class="users-panel">
    <?php

        $count = count($data);
        $number = 1;

        for ($i=0; $i < $count; $i++) { 

            echo "<div class='user-block'>
                <h3>User ".$number."</h3>

                <p> Username : ".$data[$i]['UserName']."</p>
                <p> Adress : ".$data[$i]['Adress']."</p>
                <p> Telephone : ".$data[$i]['Telephone']."</p>

                <a href='".URL."home/editUser?var=".$data[$i]['ID']."'>EDIT</a>
                <a href='".URL."home/deleteSinglefunc?var=".$data[$i]['ID']."&table=users'>DELETE</a>
            </div>";

            $number++;
        }
    ?>

    <form method="post">
        <input name="deleteAllBttn" type="submit" value="Delete All">
    </form>
</div>