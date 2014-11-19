<?php include("../Modelo/tarjeta.php");
$tar = new tarjeta();
echo $_GET['id_tarjeta'] ;
$tar->eliminarTarjeta($_GET["id_tarjeta"]);
header("Location: ../Vista/Tarjetas/listadoTarjetasEntregadas.php");
?>