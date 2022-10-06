<?php
$concerts=array(
	array('groupe'=>'Muse','lieu'=>'Stade de France', 'date'=>'08/07/2023'),
	array('groupe'=>'Rammstein','lieu'=>'Stade de France', 'date'=>'08/06/2023')
);


?>
<h2>Liste des concerts à venir</h2>
<table>
	<thead>
	<tr>
	<th>Groupe</th><th>Lieu</th><th>Date</th>
	</tr>
	</thead>
	<tbody>
	<?php
		foreach($concerts as $concert){
		echo "<tr>";
		echo "<td>".$concert['groupe']."</td><td>".$concert['lieu']."</td><td>".$concert['date']."</td>";
		echo "</tr>";
		};
	?>
	
	</tbody>
</table>
