<?php

include("../Modelo/conexion.php");
include("../Modelo/destinatario.php");
include("../Modelo/solicitud.php");
require '../phpmailer/PHPMailerAutoload.php';

$fecha = date("Y-m-d");
$hora = date("H:i:s"); 

$sol = new solicitud();
$des = new destinatario();

$destinatario = $des->obtenerDestinatario();

if($destinatario[0] != $_POST["destinatario"])
{
	$des->cambiarDestinatario($_POST["destinatario"]);
}

$destinatario = $des->obtenerDestinatario();

date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->isHTML = true;
//Ask for HTML-friendly debug output

//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->SMTPDebug  = 1;
//Username to use for SMTP authentication	
$mail->Username = "gustavo.hurtado.12@sansano.usm.cl";
//Password to use for SMTP authentication
$mail->Password = "motorola1";
//Set who the message is to be sent from
$mail->setFrom('gustavo.hurtado.12@sansano.usm.cl', 'Campus San Joaquin');
//Set an alternative reply-to address
$mail->addReplyTo('gustavo.hurtado.12@sansano.usm.cl', 'Campus San Joaquin');
//Set who the message is to be sent to

$mail->addAddress("$destinatario[0]","$destinatario[1]");
//Set the subject line
$mail->Subject = 'Tarjeta universitaria provisional';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "
		
		Estimado, <br>
		Aca van los datos para la creacion de una tarjeta estudiantil provisoria.
		<ul>
			<li> Nombre = $_POST[nombre] </li>
			<li> Rut = $_POST[rol] </li>
			<li> Numero de Boleta = $_POST[numero]</li>
		</ul>
		Este mensaje fue enviado por $_POST[ayudante] <br> <br>
		Importante: Este mensaje es generado automaticamente, enviar un email de vuelta si es que existe algun error en los datos.
		<br> Los tildes han sido omitidos intencionalmente.";

$mail->msgHTML($body);
//Replace the plain text body with one created manually
//Attach an image file


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	$sol->agregarSolicitud($_POST['rol'],$_POST['numero'],$_POST['ayudante'],$destinatario[0],$hora,$fecha);
	header("Location: ../Vista/panel.php");
}



?>