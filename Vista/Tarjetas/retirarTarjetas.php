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
	<title>Retirar Tarjeta</title> 
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />



	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../Resources/css/menu.css"/>
	   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
	   				<link rel="stylesheet" href="../../Resources/css/header.css"/>
		<link rel="stylesheet" href="../../Resources/css/ingresarTarjetas.css"/>
			<link rel="icon" type="image/png" href="../../Resources/images/stu.ico" />

	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->

  </head>

   <?php
 	include("../../Modelo/usuario.php");
 	include("../../Modelo/tarjeta.php");

 	$us = new usuario();
 	$usuario = $us->obtenerUsuarioPorID($_SESSION['usuario']);

 ?>

<body>
	<div class="container">

    <div class="row">
        
        <div class="col-md-3">   
        <img id="logo" src="../../Resources/images/UTFSM.png">
        </div>
    	<div class="col-md-6"><h1 style="margin-top: 70px; margin-right: 0px; ">Retirar tarjeta</h1></div>

        <div class="col-md-3">

        <nav>
            <ul class="fancyNav" style="margin-top: 50px;">
                <li id="home"><a href="../../Vista/panel.php"><img style="margin-left: -15px; margin-right:10px; margin-top:-5px; " src="../../Resources/images/home.png">Panel</a></li>

  
            </ul>
        </nav>

        </div>
    </div>

		<div class="row" id="fondo">
			<div class="col-md-6">
			<div id="formulario">
				<form class="form-horizontal" role="form" method="post" action="../../Controlador/retirarTarjeta.php">
					
					<div class="form-group" class="formulario" style="margin-top:80px;">
					<label style="color:white;" for="ejemplo_email_3" class="col-lg-2 control-label"></label>
					  
					    <div class="col-xs-7">
						    <?php
						  		echo  "<span style='color: red; margin-left: 20px;'>", $_SESSION['notificacion'] ,"</span>", "<b>";
						  		unset($_SESSION['notificacion']);
							?>
						</div>
					</div>

					<div class="form-group">
					    <label style="color:white;" for="ejemplo_email_3" class="col-lg-2 control-label">Rut</label>
					    <div class="col-xs-7">
						    <input  type="text" name="rol" class="form-control" placeholder="Rut del estudiante" required="true">
					    </div>
					</div>
					<br>
					 	<div class="form-group">
					    	<label style="color:white;" for="ejemplo_password_3" class="col-lg-2 control-label">Ayudante</label>
					    	<div class="col-xs-7">
					     		<input type="text" value="<?=$usuario[1]?>" class="form-control" id="ejemplo_password_3" placeholder="Nombre del ayudante" required="true" disabled>	     		
					    	</div>
					    	<div class="col-xs-7">
					     		<input type="hidden" value="<?=$usuario[1]?>" name="ayudante" class="form-control" id="ejemplo_password_3" placeholder="Nombre del ayudante" required="true">	     		
					    	</div>

					   	</div>
					   	<br>
					   <div class="form-group">
						    <label style="color:white; margin-left: 0px;" for="ejemplo_password_3" class="col-lg-2 control-label">Grupo</label>

						    <div class="col-xs-7" >
						    	<?php
								      if($_GET['grupo']==1){
								        $grupo = "A";
								      }
								      if($_GET['grupo']==2){
								        $grupo = "B";
								      }
								      if($_GET['grupo']==3){
								        $grupo = "C";
								      }
								      if($_GET['grupo']==4){
								        $grupo = "D";
								      }
								      if($_GET['grupo']==5){
								        $grupo = "E";
								      }
								      if($_GET['grupo']==6){
								        $grupo = "F";
								      }
								      if($_GET['grupo']==7){
								        $grupo = "E";
								      }
								      if($_GET['grupo']==8){
								        $grupo = "G";
								      }
								?>
						    		<input type="text" value="<?=$grupo?>" class="form-control" id="ejemplo_password_3"placeholder="El grupo saldrá pronto" required="true" disabled>
						    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-lg-offset-2 col-lg-10">	
					   	    <div class="col-lg-offset-2 col-lg-10">
					      		<button style="margin-bottom: 42px;" type="submit" class="btn btn-primary">Enviar</button>
					        </div>
					 	</div>
					  </div>
					  </form>
				</div>	
			</div>

		    	<div class="col-md-6"  id="fondo2">	
	    			<h1 class="subtitulo"> Instrucciones de uso </h1>
	    			<ul>
	    			<li class="lista2"><span class="lista"> 1.- Haga click y rellene el campo "Rut". </span> </li>
	    			<li class="lista2"><span class="lista"> 2.- Enviar el formulario. </span> </li>
	    			<li class="lista2"><span class="lista"> 3.- Esperar a que aparezca la letra del grupo. </span> </li>
	    			<li class="lista2"><span class="lista"> 4.- Buscar dentro del grupo <br> de tarjetas. </span> </li>
	    			<li class=""><span class="lista"> 5.- Entregar Tarjeta. </span> </li>
	    			</ul>
					<img id="tui2" src="../../Resources/images/tui.png">
				</div>

			</div>
		</div>	

</body>
</html>