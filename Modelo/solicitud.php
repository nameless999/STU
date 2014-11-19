<?php

	class solicitud
	{
		
		function _construct()
		 {

		 } 

		function obtenerSolicitudes()
		{

	    include("conexion.php");
	    $query = "SELECT * FROM solicitud ORDER BY fecha_solicitud" ;
	    $result  = pg_query($query);
	    $solicitudes =  array();
	    while ($row = pg_fetch_row($result)) {
	      array_push($solicitudes, $row);
	        
		}
			return $solicitudes;
		}

		function agregarSolicitud($rut,$comprobante,$solicitada_por,$destino,$hora_solicitud,$fecha_solicitud)
		{	
		    
		    $query = "INSERT INTO solicitud(rut,numero_comprobante,solicitada_por,destino,hora_solicitud,fecha_solicitud,estado)
					 VALUES('".$rut."','".$comprobante."','".$solicitada_por."','".$destino."','".$hora_solicitud."','".$fecha_solicitud."', 'En proceso')";
		    $result = pg_query($query);
	   
		}

		
		function obtenerSolicitudPorID($id_solicitud)
		{

	    include("conexion.php");
	    $query = "SELECT * FROM solicitud Where id_solicitud = '".$id_solicitud."' and estado not like 'Cancelada' or estado not like 'Recibida'";
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function obtenerSolicitudPorRol($rol)
		{
	    include("conexion.php");
	    $query = "SELECT * FROM solicitud Where rut = '".$rol."' and estado not like 'Cancelada' and estado not like 'Recibida'";
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function llegadaSolicitud($rut)
		{
		    include("conexion.php");
		    $query = "UPDATE solicitud SET estado = 'Recibida' where rut = '".$rut."' and estado not like 'Cancelada' and estado not like 'Recibida' ";
		    $result  = pg_query($query);
		}

		function cancelarSolicitud($id_solicitud,$fecha_cancelacion,$cancelada_por)
		{
		    include("conexion.php");
		    $query = "UPDATE solicitud SET fecha_cancelacion = '".$fecha_cancelacion."', cancelada_por = '".$cancelada_por."', estado = 'Cancelada' where id_solicitud = '".$id_solicitud."' and estado NOT LIKE 'Cancelada'";
		    $result  = pg_query($query);
		}
	}
?>