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
	<title>Ingresar ayudante</title> 
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

<body>
	<div class="container">

   	 <div class="row">
        
		<div class="col-md-3">   
        	<img id="logo" src="../../Resources/images/UTFSM.png">
        </div>
    	
    	<div class="col-md-6">
    		<h1 style="margin-top: 70px; margin-right: 0px; ">Ingresar ayudante</h1>
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
					<form action="../../Controlador/ingresarAyudante.php" class="form-horizontal" method="post" role="form">
						
						<div class="form-group" class="formulario" style="margin-top:80px;">
								<label style="color:white;" class="col-lg-2 control-label"></label>
								<div class="col-xs-7">
				     				<?php
										 echo  "<span style='color: red;'>", $_SESSION['notificacion'] ,"</span>", "<b>";
										 unset($_SESSION['notificacion']);
									 ?>
						    	</div>
					    	</div>

						<div class="form-group">
						    <label style="color:white;" for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
						    <div class="col-xs-7">
							    <input  type="text" name="nombre" class="form-control" placeholder="Nombre del ayudante" required="true">
						    </div>
						</div>
					<br>
				 	<div class="form-group">
				    	<label style="color:white;" class="col-lg-2 control-label">Correo</label>

				    <div class="col-xs-7">
				     		<input type="mail" class="form-control" name="correo" id="ejemplo_password_3"placeholder="Correo del ayudante" required="true">
				     		
				    	</div>

				   	</div>
				   	<br>
				  	<div class="form-group">
				    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Password</label>
				    	<div class="col-xs-7">
				     		<input type="text" class="form-control" name="password" id="ejemplo_password_3"placeholder="Contraseña del ayudante" required="true">
				     		
				    	</div>

				   	</div>
				   	<br>

				   	<div class="form-group">
				    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Permisos </label>
				    	<div class="col-xs-7">
				     		<select name="permiso"  class="form-control">
							  <option value="1" > Administrador de sistema </option>
							  <option value="2" selected=""> Ayudante </option>
							</select>										     		
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

		    	<div class="col-md-6"  id="fondo2">	

	    			<h1 class="subtitulo" style="margin-top:30px;"> Instrucciones de uso </h1>
	    			<ul>
	    			<li class="lista2"><span class="lista"> 1.- Ingrese el nombre del ayudante. </span> </li>
	    			<li class="lista2"><span class="lista"> 2.- Ingrese el correo del ayudante, recuerde que con este se logueará posteriormente. </span> </li>
	    			<li class="lista2"><span class="lista"> 3.- Ingresar contraseña del ayudante, esta le permitirá loguearse. </span> </li>
	    			<li class="lista2"><span class="lista"> 4.- Selecciones un permiso:  <ul style="margin-top:10px;"> <li> Administrador: Tiene permisos para modificar y ver todo. </li>
	    			<li> Ayudante: Tiene permisos para Solicitar tarjetas, Retirar tarjetas y Ver horario de laboratorios. </li>
	    			</ul>  </span> </li>
	    			<li class=""><span class="lista"> 5.- Enviar el formulario </span> </li>
	    			</ul>
					<img id="ayudante" src="../../Resources/images/ayudante.png">
				</div>

			</div>
		</div>	

</body>
</html>