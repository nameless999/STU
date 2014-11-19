<?php 
	session_start();
	include("../Modelo/tarjeta.php");
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");   
	$tar = new tarjeta();
	$tarjeta = $tar->obtenerTarjetaPorRol($_POST['rol']);
	echo $tarjeta[2];
	if($tarjeta[2] == 0)
	{
		$tarjeta = $tar->obtenerTarjetaPorRolExcepto($_POST['rol']);
		echo $tarjeta[2];

	}
	
	$tar->retirarTarjeta($tarjeta[0],$_POST['ayudante'],$fecha,$hora);
	$_SESSION['notificacion'] = "Tarjeta retirada exitosamente";

	if($tarjeta[2] == null)
	{
		$_SESSION['notificacion'] = "Tarjeta no encontrada";	
	}
	header("Location: ../Vista/Tarjetas/retirarTarjetas.php?grupo=".$tarjeta[2]."");

?>