<?php

	class destinatario
	{
		
		function _construct()
		  {

		  } 

		function obtenerDestinatario()
		{
		    include("conexion.php");
		    $query = "SELECT * FROM destinatario";
		    $result  = pg_query($query);
		    $row = pg_fetch_row($result);    
			return $row;
		}

		function cambiarDestinatario($mail)
		{
		    include("conexion.php");
		    $query = "UPDATE destinatario SET mail = '".$mail."' where nombre = 'Campus Vitacura' ";
		    $result  = pg_query($query);
		}
	}

?>