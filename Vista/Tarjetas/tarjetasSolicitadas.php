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
  <title>Tarjetas Solicitadas</title> 
  <META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
  <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />



  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Resources/css/menu.css"/>
     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
            <link rel="stylesheet" href="../../Resources/css/header.css"/>
    <link rel="stylesheet" href="../../Resources/css/ingresarTarjetas.css"/>
     <link rel="stylesheet" href="../../Resources/css/tablas.css"/>
      <link rel="icon" type="image/png" href="../../Resources/images/stu.ico" />
  <!--[if IE 7]>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
  <![endif]-->

  </head>

   <?php
  include("../../Modelo/solicitud.php");

  $sol = new solicitud();
  $solicitudes = $sol->obtenerSolicitudes();

 ?>

<body>
  <div class="container">

    <div class="row">
        
        <div class="col-md-3">   
        <img id="logo" src="../../Resources/images/UTFSM.png">
        </div>
      <div class="col-md-6"><h1 style="margin-top: 70px; margin-right: 0px; ">Tarjetas solicitadas</h1></div>

        <div class="col-md-3">

        <nav>
            <ul class="fancyNav" style="margin-top: 50px;">
                <li id="home"><a href="../../Vista/panel.php"><img style="margin-left: -15px; margin-right:10px; margin-top:-5px; " src="../../Resources/images/home.png">Panel</a></li>

  
            </ul>
        </nav>

        </div>
    </div>

    <div class="row"  id="fondo">
      <table style="text-align:center;">
  <theadstyle="text-align:center;">
    <tr>
      <th style="padding-left:40px; padding-right:40px;">RUT</th>
      <th>N° comprobante</th>
      <th>Solicitada por  </th>
      <th>Destino </th>
      <th>Hora solicitud </th>
      <th>Fecha solicitud </th>
      <th>Estado </th>
      <th>Cancelar Solicitud </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($solicitudes as $solicitud) {
   
   if($solicitud[9] != "Recibida"){
   echo "<tr>
      <td><strong>$solicitud[1]</strong></td>
      <td>$solicitud[2]</td>
      <td>$solicitud[3]</td>
      <td>$solicitud[4]</td>
      <td>$solicitud[5]</td>
      <td>$solicitud[6]</td>
      <td>$solicitud[9]</td>
      <td> <input type='image' style='height: 20px;' src='../../Resources/images/delete.svg.png' onclick='show_confirm($solicitud[0])'></input> </td>        
    </tr>";
	}
  }?>
  </tbody>
</table>
    </div>  

<script type="text/javascript">
  function show_confirm(id_solicitud)
  {
  var r=confirm("¿Deseas cancelar la solicitud?");
  if (r==true)
    {
      window.location.href = "../../Controlador/cancelarSolicitud.php?id_solicitud="+ id_solicitud;
    }

}
</script>

</body>
</html>

