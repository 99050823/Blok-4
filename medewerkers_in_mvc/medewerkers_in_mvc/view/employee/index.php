	<h1>Overzicht van personen</h1>
	<ul>
		<?php
		
			$count = count($data);
			
			for ($i=0; $i < $count; $i++) { 
				echo "<li>".$data[$i]['name']."</li>";
				echo "<a href='/Blok-4/medewerkers_in_mvc/medewerkers_in_mvc/employee/edit/".$data[$i]['id']."'>Wijzigen<a>
					<a href='/Blok-4/medewerkers_in_mvc/medewerkers_in_mvc/employee/delete/".$data[$i]['id']."'>Verwijderen<a>
				";
			}
		?>
	</ul>