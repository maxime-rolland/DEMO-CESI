<?php
$appName="Concert à venir";

?>
<html>
	<head>
		<link rel="stylesheet" href="./style.css"/>
	</head>
	<body>
		<h1><?php echo $appName;?></h1>
		<p>Hello World!</p>
		<?php include "./concert.php";?>
		<?php include "./boissons.php";?>
	</body>
</html>
