<?php
	session_start();
	include("../Modelo/usuario.php");
	include("../Modelo/conexion.php");
	$us = new usuario();
	$us->modificarContrasenna($_SESSION['nombreUser'],$_POST['contraseña']);
	$_SESSION['notificacion'] = "Contraseña modificada correctamente";
	header("Location: ../Vista/Ayudantes/modificarContraseña.php");
?>