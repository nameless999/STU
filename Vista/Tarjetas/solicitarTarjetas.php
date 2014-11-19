<?php 
	session_start();	 
	if(!isset($_SESSION['Logueado'])) 
	{ 
		header('Location: ../login.php');
	}

?>


<!DOCTYPE html> 	 

<html> 
<head>
	<title>Solicitar Tarjeta</title> 
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
	<link rel="icon" type="image/png" href="../../Resources/images/stu.ico" />

	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->

  </head>

 <?php
 	include("../../Modelo/destinatario.php");
 	include("../../Modelo/usuario.php");
 	$des = new destinatario();
	$destinatario = $des->obtenerDestinatario();
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
    		<h1 style="margin-top: 70px; margin-right: 0px; ">Solicitar tarjeta</h1>
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
					<form action="../../Controlador/solicitarTarjeta.php" class="form-horizontal" method="post" role="form">
						<div class="form-group" class="formulario" style="margin-top:70px;">
						    <label style="color:white;" for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
						    <div class="col-xs-7">
							    <input  type="text" name="nombre" class="form-control" placeholder="Nombre de estudiante" required="true">
						    </div>
						</div>
					<br>
				 	<div class="form-group">
				    	<label style="color:white;" class="col-lg-2 control-label">Número</label>

				    <div class="col-xs-7">
				     		<input type="text" class="form-control" name="numero" id="ejemplo_password_3"placeholder="Número del comprobante" required="true">
				     		
				    	</div>

				   	</div>
				   	<br>
				  	<div class="form-group">
				    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Rut</label>
				    	<div class="col-xs-7">
				     		<input type="text" class="form-control" name="rol" id="ejemplo_password_3"placeholder="Rut del alumno" required="true">
				     		
				    	</div>

				   	</div>
				   	<br>

				   	<div class="form-group">
				    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Ayudante </label>
				    	<div class="col-xs-7">
				     		<input type="text" value="<?=$usuario[1]?>"  class="form-control" name="ayudante" id="ejemplo_password_3"placeholder="Nombre del ayudante" disabled>
				     		<input type="hidden" value="<?=$usuario[1]?>"  class="form-control" name="ayudante" id="ejemplo_password_3"placeholder="Nombre del ayudante" >
				     		
				    	</div>
				    </div>
				   	
				   	<br>

			   		<div class="form-group">
			    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Destino </label>
			    	<div class="col-xs-7">
			    	<?php 
			    		if($_SESSION['permiso'] == 1)
			    		{

			    		echo '<input type="email" value="'.$destinatario[0].'" class="form-control" name="destinatario" id="ejemplo_password_3"placeholder="Mail destinatario">';
			    		}
			    		
			    		else
			    		{
			    		
			    		echo '
			    			<input type="email" value="'.$destinatario[0].'"  class="form-control" name="destinatario" id="ejemplo_password_3"placeholder="Mail destinatario" disabled>
			     			<input type="hidden" value="'.$destinatario[0].'"  class="form-control" name="destinatario" id="ejemplo_password_3">	';
			    		} ?>
			    		
	     		
			     		
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

		    	<div class="col-md-6"  id="fondo2" style="padding-top:50px; padding-bottom:20px;">	

	    			<h1 class="subtitulo"> Instrucciones de uso </h1>
	    			<ul>
	    			<li class="lista2"><span class="lista"> 1.- Ingrese el nombre  del estudiante situado en la boleta </span> </li>
	    			<li class="lista2"><span class="lista"> 2.- Ingrese el número de la boleta </span> </li>
	    			<li class="lista2"><span class="lista"> 3.- Ingresar el rut del alumno </span> </li>
	    			<li class=""><span class="lista"> 4.- Enviar el formulario </span> </li>
	    			</ul>
					<img id="tui" src="../../Resources/images/tui.png">
				</div>

			</div>
		</div>	

</body>
</html>