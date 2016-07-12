<?php
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');
 
//Recibir todos los parámetros del formulario
$nombre = $_POST['nombre'];
$para = $_POST['correo'];
$tema = $_POST['tema'];
$opinion = $_POST['opinion'];

 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nuestra cuenta
$mail->Username ='ponerTuCuentaDeMail@gmail.com';
$mail->Password = '*******'; //Su password
 
//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $tema;
$mail->Body = $opinion;
//Para adjuntar archivo

$mail->MsgHTML($opinion);
 
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="http://localhost/wordpress"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="http://localhost/wordpress"
         </script>';
}