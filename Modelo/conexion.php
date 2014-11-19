<?php
// conexion.php
	$db = pg_connect("host=localhost port=5432 dbname=stubd user=admin password=adminlab")
      or die('Could not connect: ' . pg_last_error());
?>

