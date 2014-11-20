<?php 
	session_start();	 
	if(!isset($_SESSION['Logueado'])) 
	{ 
		header('Location: ../login.php');
	}
?>

<script>
function formulario(form){
	var p1 = form.contraseña.value;
	var p2 = form.contraseña2.value;

	if (p1 != p2) {
	  alert("Las contraseñas no coinciden");
	  return false;
	}
}

</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>



<!DOCTYPE html> 	 

<html> 
<head>
	<title>Agregar Tarjeta</title> 
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../Resources/css/menu.css"/>
	<link rel="stylesheet" href="../../Resources/css/header.css"/>
	<link rel="stylesheet" href="../../Resources/css/ingresarTarjetas.css"/>
	<link rel="icon" type="image/png" href="../../Resources/images/stu.ico"/>

	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
 	
  </head>

 <?php
 	include("../../Modelo/usuario.php");
 	$us = new usuario();
 	$usuario = $us->obtenerUsuarioPorID($_SESSION['usuario']);	
 ?>

<body>
	<div class="container">

   	 <div class="row">
        
		<div class="col-md-3">   
        	<img id="logo" src="../../Resources/images/UTFSM.png">
        </div>
    	
    	<div class="col-md-6">
    		<h1 style="margin-top: 70px; margin-right: 0px; ">Modificar Contraseña</h1>
    	</div>

        <div class="col-md-3">
        <nav>
            <ul class="fancyNav" style="margin-top: 50px;">
                <li id="home"><a href="../../Vista/panel.php"><img style="margin-left: -15px; margin-right:10px; margin-top:-5px;" src="../../Resources/images/home.png">Panel</a></li>
            </ul>

        </nav>
        </div>
            </div>
           
		<div class="row" id="fondo">
			<div class="col-md-6">
				<div id="formulario">
					<form onSubmit="return formulario(this)" action="../../Controlador/modificarContraseña.php" class="form-horizontal" method="post" role="form">
						<div class="form-group" class="formulario" style="margin-top:80px;">
							<label style="color:white;" class="col-lg-2 control-label"></label>
							<div class="col-xs-7">
			     				<?php
									 echo  "<span style='color: red;'>", $_SESSION['notificacion'] ,"</span>", "<b>";;
									 unset($_SESSION['notificacion'])
								 ?>
					    	</div>
				    	</div>
				    	<div class="form-group" class="formulario">
						    <label style="color:white;" class="col-lg-2 control-label" >Contraseña</label>
				    		<div class="col-xs-7">
				     			<input autofocus type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" required="true">
				     		
				    		</div>
						</div>
						<br>

						<div class="form-group" class="formulario">
						    <label style="color:white; text-align:center;" class="col-lg-2 control-label" >Repetir Contraseña</label>
				    		<div class="col-xs-7" style="margin-top:10px;">
				     			<input autofocus type="password" class="form-control" name="contraseña2" placeholder="" required="true">
				     		
				    		</div>
						</div>
						<br>

					   	<div class="form-group">
					    	<label style="color:white;" class="col-lg-2 control-label">Ayudante </label>
					    	<div class="col-xs-7">
					     		<input type="text" value="<?=$usuario[1]?>"  class="form-control" name="ayudante" placeholder="Nombre del ayudante" disabled="true">
					     		<input type="hidden" value="<?=$usuario[1]?>"  class="form-control" name="ayudante" placeholder="Nombre del ayudante" >
					    	</div>

					   	</div>
					   	<br>

					  <div class="form-group">
					    <div class="col-lg-offset-2 col-lg-10">	
					   	    <div class="col-lg-offset-2 col-lg-10">
					      		<button style="margin-bottom: 20px;" type="submit" class="btn btn-primary">Enviar</button>
					        </div>
					 	</div>
					  </div>
				  </form>
			</div>	
		</div>

		    	<div class="col-md-6" id="fondo2" style="padding-bottom:160px;">	

	    			<h1 class="subtitulo" style="padding-top:20px;"> Instrucciones de uso </h1>
	    			<ul>
	    			<li class="lista2"><span class="lista"> 1.- Ingrese la nueva contraseña. </span> </li>
	    			<li class="lista2"><span class="lista"> 2.- Enviar el formulario. </span> </li>
	    		
	    
	    			</ul>
	    			<span  class="lista" style="color: #0073FF; "> Nota: Esto se debe a que al crearse la cuenta de ayudante, esta vendrá con una clave pre-definida por el administrador. </span>
				</div>

			</div>
		</div>	



</body>
</html>