<?php
$concerts=array(
	array('groupe'=>'Muse','lieu'=>'Stade de France', 'date'=>'08/07/2023'),
	array('groupe'=>'Rammstein','lieu'=>'Stade de France', 'date'=>'08/06/2023')
);


?>


<h2>Liste des concerts à venir</h2>
<table class="table">
	<thead>
	<tr>
	<th>Groupe</th><th>Lieu</th><th>Date</th>
	</tr>
	</thead>
	<tbody>
	<?php
		foreach($concerts as $concert){
		$now = time(); // or your date as well
		$your_date = strtotime($concert['date']);
		$datediff = $now - $your_date;

		$nbJours = -(round($datediff / (60 * 60 * 24)));

		echo "<tr>";
		echo "<td>".$concert['groupe']."</td><td>".$concert['lieu']."</td><td>".$concert['date']." <span class='badge bg-primary'>Plus que ".$nbJours." jours à attendre !</span></td>";
		echo "</tr>";
		};
	?>
	
	</tbody>
</table>
