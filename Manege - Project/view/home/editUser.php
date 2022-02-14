<?php

    $submit = $_POST['subButton'];
    $id = $_GET['var'];

    if ($submit) {
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];

        updateUser($id, $name, $adress, $phone);
    }
?>

<section>
    <h2>Edit user</h2>

    <form method="post">
        <label for="name">Username : </label>
        <input name="name" type="text"><br>

        <label for="adress">Adress : </label>
        <input name="adress" type="text"><br>

        <label for="phone">Telephone : </label>
        <input name="phone" type="text"><br>

        <input name="subButton" type="submit" value="EDIT">
    </form>
</section>