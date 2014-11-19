<?php

	class usuario
	{
		
		function _construct()
		  {

		  } 

		function obtenerUsuarios()
		{

	    include("conexion.php");
	    $query = "SELECT * FROM usuario ORDER BY nombre" ;
	    $result  = pg_query($query);
	    $usuarios =  array();
	    while ($row = pg_fetch_row($result)) {
	      array_push($usuarios, $row);
	        
		}
			return $usuarios;
		}

		function obtenerUsuarioPorID($id_usuario)
		{

	    include("conexion.php");
	    $query = "SELECT * FROM usuario Where id_usuario = '".$id_usuario."'" ;
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function agregarUsuario($nombre,$correo,$password,$permiso)
		{
			include("conexion.php");
		    $query = "INSERT INTO usuario(id_usuario,nombre,correo,pass,permiso) VALUES(default,'".$nombre."','".$correo."','".$password."','".$permiso."')";
		    $result = pg_query($query);
		    echo $result;
		    return $result;
		 }

	}

?>