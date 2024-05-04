<?php
$nombre = $_POST['conta_name'];
$mail = $_POST['conta_mail'];
$tel = $_POST['conta_tel'];
$sol = $_POST['conta_sol'];
$asun = $_POST['conta_asun'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Web: alambresagc.com.ar \r\n";
$mensaje .= "Su teléfono de contacto es: " . $tel . " \r\n";
$mensaje .= "Nos dijo: " . $sol . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'info@alambresagc.com.ar';

mail($para, $_POST['conta_asun'], utf8_decode($mensaje), $header) ;

echo "Mensaje enviado correctamente. Muchas Gracias." ;

?>

<script language="javascript">
<!-- Aqui agregar comentario --> window.location="index.html";
</script>