     <!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
    <META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
  <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="../bootstrap/normalize.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../Resources/css/login.css">
  <link rel="icon" type="image/png" href="../Resources/images/stu.ico" />
</head>

<body style="background:url(../Resources/images/patron.png) scroll center center;    font-family:Quicksand;
    font-weight:700;">
<div class="container">
    
    <?php
    session_start();
    unset($_SESSION['Logueado']); 
    ?>

    <div class="row">
    	<div class="col-md-3">
          <a href="http://servicios.lab.sanjoaquin.usm.cl/"><img id="logo" src="../Resources/images/UTFSM.png"></a>
          
      </div>
      
      <div class="col-md-6">
          <h1 style="margin-top: 70px; color: #807979; margin-left:60px">Sistema tarjetas universitarias</h1>
      </div>
      
      <div class="col-md-3">
          <img id="dti" src="../Resources/images/dti.png">
      </div>
    </div>
 
 	<div id="fondo" style="margin-top: 60px; ">
 	<div class="row">
    	<div class="col-md-4"></div>
        <div class="col-md-4"> <center>
	        <h3 style="color: white;">Ingresa al sistema</h3>
	               <?php echo "<p style='color: red;'>", $_SESSION['error'],"</p>", "<b>"; ?>
	        <form method="post" action="../Controlador/login.php" role="form" class="form-inline">

	          <div class="form-group">

	            <input name="usuario" type="text" class="form-control" placeholder="Introduce usuario">
	          </div>
	          <br>
	          <div class="form-group">

	            <br>
	            <input name="contraseña" type="password" class="form-control" 
	                   placeholder="Contraseña">
	          </div>
	          <br>
	          <br>
	         <button type="submit" class="btn btn-primary">Enviar</button>
	         <br>
	         <br>
	        </form>
	      </div>
	      <br></div></center>
        <div class="col-md-4"></div>
     </div>
     

</div>
      <?php
      unset($_SESSION['error']);
      ?>
</center>



</body>


</html>
