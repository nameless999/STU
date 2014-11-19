<?php 

	session_start();
	include("../Modelo/conexion.php");
	include("../Modelo/solicitud.php");
	include("../Modelo/destinatario.php");
	require '../phpmailer/PHPMailerAutoload.php';

$des = new destinatario();
$sol = new solicitud();

$fecha = date("Y-m-d");
$hora = date("H:i:s");   
$solicitud = $sol->obtenerSolicitudPorID($_GET['id_solicitud']);
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
$mail->Subject = 'Cancelar Impresion';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$enviador = $_SESSION['nombreUser'];
$body =  "	
		Estimado, <br>
		Se solicita cancelar la creacion de la tarjeta del alumno con los datos: 
		<ul>
			<li> RUT = $solicitud[1] </li>
			<li> Numero de Boleta = $solicitud[2]</li>
		</ul>
		Este mensaje fue enviado por $enviador <br> <br>
		Importante: Este mensaje es generado automaticamente, enviar un email de vuelta si es que existe algun error en los datos.
		<br> Los tildes han sido omitidos intencionalmente.;

$mail->msgHTML($body);
//Replace the plain text body with one created manually
//Attach an image file


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	$sol->cancelarSolicitud($_GET['id_solicitud'],$fecha, $_SESSION['nombreUser']);
	header("Location: ../Vista/Tarjetas/tarjetasSolicitadas.php");
}

?>