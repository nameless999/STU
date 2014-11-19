<?php
	session_start();
	include("../Modelo/usuario.php");
	include("../Modelo/conexion.php");
	$us = new usuario();
	$k = $us->agregarUsuario($_POST['nombre'],$_POST['correo'],$_POST['password'],$_POST['permiso']);
	if($k != NULL)
	{
		$_SESSION['notificacion'] = "Ayudante ingresado correctamente";
	}
	else
	{
		$_SESSION['notificacion'] = "Ayudante no ingresado";	
	}
	header("Location: ../Vista/Ayudantes/ingresarAyudante.php");
?>