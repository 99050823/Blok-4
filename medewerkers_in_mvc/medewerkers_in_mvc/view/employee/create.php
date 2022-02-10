<?php
	$submit = $_POST['createSubmit'];

	if ($submit) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		
		store($name, $age);
	}
?>

<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="create">
	<label for="name">Name : </label>
	<input name="name" type="text">

	<label for="age">Age : </label>
	<input name="age" type="text">

	<input name="createSubmit" type="submit" value="Submit">
</form>