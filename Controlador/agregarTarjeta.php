<?php
	session_start();
	include("../Modelo/tarjeta.php");
	include("../Modelo/solicitud.php");
	$tar = new tarjeta();
	$sol = new solicitud();

	$cantidadTarjetas = $tar->obtenerCantidadTarjetas();
	$cantidadTarjetasA = $tar->obtenerCantidadTarjetasGrupo(1);	
	$cantidadTarjetasB = $tar->obtenerCantidadTarjetasGrupo(2);
	$cantidadTarjetasC = $tar->obtenerCantidadTarjetasGrupo(3);
	$cantidadTarjetasD = $tar->obtenerCantidadTarjetasGrupo(4);
	$cantidadTarjetasE = $tar->obtenerCantidadTarjetasGrupo(5);
	$cantidadTarjetasF = $tar->obtenerCantidadTarjetasGrupo(6);
	$cantidadTarjetasG = $tar->obtenerCantidadTarjetasGrupo(7);
	$cantidadTarjetasH = $tar->obtenerCantidadTarjetasGrupo(8);
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");   

	if($cantidadTarjetasA < 10)
	{
		$grupo = 1;
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo A";
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}

	}

	elseif($cantidadTarjetasB < 10)
	{
		$grupo = 2;
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo B";
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasC < 10)
	{
		$grupo = 3;
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo C";
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasD < 10)
	{
		$grupo = 4;
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo D";
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasE < 10)
	{
		$grupo = 5;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo E";

		
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasF < 10)
	{
		$grupo = 6;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo F";
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasG < 10)
	{
		$grupo = 7;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo G";
		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}

	elseif($cantidadTarjetasH < 10)
	{
		$grupo = 8;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'], $fecha,$hora);
		$_SESSION['notificacion'] = "Tarjeta ingresada correctamente en el grupo H";

		if($k == null)
			{
				$_SESSION['notificacion'] = "Tarjeta no ingresada";
			}

		else
		{
			$solicitud = $sol->obtenerSolicitudPorRol($_POST['rol']);
			if($solicitud[1] == $_POST['rol'])
			{
				$sol->llegadaSolicitud($_POST['rol']);
			}
		}
	}
	header("Location: ../Vista/Tarjetas/agregarTarjeta.php");
?>
