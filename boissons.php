<?php
$boissons=array(
	array('nom'=>'Coca','alcool'=>false, 'prix'=>'8,50'),
	array('nom'=>'Heineken','alcool'=>true, 'prix'=>'5,50'),
	array('nom'=>'Kronembourg','alcool'=>false, 'prix'=>'4,50'),
);


?>
<h2>Liste des boissons disponibles</h2>
<table>
	<thead>
	<tr>
	<th>Nom de la boisson</th><th>Alcool</th><th>Prix</th>
	</tr>
	</thead>
	<tbody>
	<?php
		foreach($boissons as $boisson){
		echo "<tr>";
		echo "<td>".$boisson['nom']."</td><td>".$boisson['alcool']."</td><td>".$boisson['prix']."</td>";
		echo "</tr>";
		};
	?>
	
	</tbody>
</table>
