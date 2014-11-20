<?php
// conexion.php
	$db = pg_connect("host=localhost port=5432 dbname=Tarea3BD user=postgres password=motorola13")
      or die('Could not connect: ' . pg_last_error());
?>

