<?php
	session_start();
	include("../Modelo/usuario.php");
	$us = new usuario();
	$usuarios = $us->obtenerUsuarios();
	$k = 0;
	foreach ($usuarios as $usuario) 
	{
		if($_POST[usuario] == $usuario[2] && $_POST[contraseña] == $usuario[3])
		{
			$k=-1;
			$_SESSION['Logueado'] = "1";
			$_SESSION['nombreUser'] = $usuario[1];
			$_SESSION['usuario'] = $usuario[0];
 			$_SESSION['permiso'] = $usuario[4];
			header("Location: ../Vista/panel.php");
		}
	}

	if($k==0)
   	{
   		$_SESSION['error'] = "Usuario o contraseña incorrectas";
   		header("Location: ../Vista/login.php");
   	}

?>