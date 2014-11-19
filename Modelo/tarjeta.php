<?php

	class tarjeta
	{
		
		function _construct()
		  {

		  } 

		function obtenerTarjetas()
		{

	    include("conexion.php");
	    $query = "SELECT * FROM tarjeta ORDER BY grupo" ;
	    $result  = pg_query($query);
	    $tarjetas =  array();
	    while ($row = pg_fetch_row($result)) {
	      array_push($tarjetas, $row);
	        
		}
			return $tarjetas;
		}

		function obtenerTarjetasOrderByRol()
		{

	    include("conexion.php");
	    $query = "SELECT * FROM tarjeta ORDER BY rol_tarjeta" ;
	    $result  = pg_query($query);
	    $tarjetas =  array();
	    while ($row = pg_fetch_row($result)) {
	      array_push($tarjetas, $row);
	        
		}
			return $tarjetas;
		}

		function obtenerTarjetaPorRol($rol_tarjeta)
		{

	    include("conexion.php");
	    $query = "SELECT * FROM tarjeta Where rol_tarjeta = '".$rol_tarjeta."'" ;
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function obtenerTarjetaPorRolExcepto($rol_tarjeta)
		{

	    include("conexion.php");
	    echo  "SELECT * FROM tarjeta Where rol_tarjeta = '".$rol_tarjeta."' and grupo IS NOT 0" ;
	    $query = "SELECT * FROM tarjeta Where rol_tarjeta = '".$rol_tarjeta."' and grupo != 0" ;
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function agregarTarjeta($rol_tarjeta,$grupo,$agregada_por,$fecha_ingreso,$hora_ingreso)
		{
			include("conexion.php");
		    $query = "INSERT INTO tarjeta(rol_tarjeta,grupo,agregada_por,fecha_ingreso,hora_ingreso) VALUES('".$rol_tarjeta."','".$grupo."','".$agregada_por."','".$fecha_ingreso."','".$hora_ingreso."')";
		    $result = pg_query($query);
		    return $result;		   
		}

		function obtenerCantidadTarjetas()
		{

		    include("conexion.php");
		    $query = "SELECT grupo FROM tarjeta";
		    $result  = pg_query($query);
			$rows = pg_num_rows($result);   
			return $rows;
		}

		function retirarTarjeta($id_tarjeta,$retirado_por,$fecha_retiro,$hora_retiro)
		{
		
		    include("conexion.php");
		    $query = "UPDATE tarjeta SET entregada_por = '".$retirado_por."', grupo = 0, fecha_retiro = '".$fecha_retiro."', hora_retiro = '".$hora_retiro."' where id_tarjeta = '".$id_tarjeta."'";
		    $result  = pg_query($query);
		}

		function eliminarTarjeta($id_tarjeta)
		{
		    include("conexion.php");
		    $query = "DELETE FROM tarjeta where id_tarjeta = '".$id_tarjeta."'";
		    $result  = pg_query($query);
		}



		function obtenerCantidadTarjetasGrupo($grupo)
		{

		    include("conexion.php");

		    $query = "SELECT grupo FROM tarjeta where grupo = '".$grupo."'";
		    $result  = pg_query($query);
			$rows = pg_num_rows($result);   
			return $rows;
		}
	}

?>