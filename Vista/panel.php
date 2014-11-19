<?php 
	session_start();	 
	if(!isset($_SESSION['Logueado'])) 
	{ 
		header('Location: login.php');
	}
?>

<!DOCTYPE html> 
<html> 
<head>
	<title>Panel</title> 
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Resources/css/menu.css"/>
	<link rel="stylesheet" href="../Resources/css/header.css"/>
	<link rel="stylesheet" href="../Resources/css/ingresarTarjetas.css"/>
	<link rel="icon" type="image/png" href="../Resources/images/stu.ico" />

	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
  
  
  </head>

<body>
	<div class="container">
	    <div class="row">

	        <div class="col-md-3">   
	        	<img id="logo" src="../Resources/images/UTFSM.png">
	        </div>

	    	<div class="col-md-6">
	    		<h1 style="margin-top: 70px; margin-right: 0px;">Panel de Administración</h1>
	    	</div>

	        <div class="col-md-3">
	           <img id="dti" src="../Resources/images/dti.png">
	        </div>

        </div>

	<div class="row" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.2); padding-top: 30px; padding-bottom: 30px;">
			

		<ul class="form">
				<li id="panel">Menú</li>

		</ul>
	
		<ul class="form">
		<?php 
		if($_SESSION['permiso'] == 1)
		{
			echo '<li><a class="messages" href="Ayudantes/ingresarAyudante.php"><i class="fa fa-user"></i> Agregar ayudante </a></li>';
		}
		?>
		<li><a class="messages" href="Tarjetas/agregarTarjeta.php"><i class="fa fa-cloud-upload"></i> Agregar Tarjeta </a></li>
		<li><a class="messages" href="Tarjetas/solicitarTarjetas.php"><i class="fa fa-envelope"></i>Solicitar Tarjeta </a></li>
		<li><a class="messages" href="Tarjetas/tarjetasSolicitadas.php"><i class="fa fa-table"></i>Tarjetas Solicitadas</a></li>
		<li><a class="messages" href="Tarjetas/listadoTarjetasEnSistema.php"><i class="fa fa-list-alt"></i>Tarjetas en sistema </a></li>
		<li><a class="messages" href="Tarjetas/listadoTarjetasEntregadas.php"><i class="fa fa-outdent"></i>Tarjetas entregadas </a></li>
		<li><a class="messages" href="Tarjetas/retirarTarjetas.php"><i class="fa fa-credit-card"></i>Retirar Tarjeta </a></li>
		<li><a class="logout" href="index.php"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
	</ul>
	
  </div>
  </div>
</body>
</html>