<?php

	$submit = $_POST['editSubmit'];
	$employee = $data['id'];

	if ($submit) {
		$name = $_POST['name'];
		$age = $_POST['age'];

		update($name, $age, $employee);
	}
?>

<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="update">
	<label for="name">Name : </label>
	<input name="name" type="text">

	<label for="age">Age : </label>
	<input name="age" type="text">

	<input name="editSubmit" type="submit" value="Submit">
</form>

