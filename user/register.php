<?php
include("../database.php");
$matricula=$_GET["regusername"];
$userid=$matricula;
$password=$_GET["regpassword"];
$password2=$_GET["regpassword2"];
$encypt_password=md5($password);
$name=$_GET["regname"];
$apellido=$_GET["regapellido"];
$correo=$_GET["regcorreo"];
$correo_itesm=$matricula . "@itesm.mx";
$terminos=$_GET["regterminos"];

$query=mysql_query("SELECT * from web_users where matricula='$matricula' ");
$find=mysql_num_rows($query);
if ($terminos==0) {
    header("location:http://www.furthercsc.com/user/login.php?error=terminos");
}
elseif ($password!==$password2) {
    header("location:http://www.furthercsc.com/user/login.php?error=password");
}
elseif ($find!==0) {
    header("location:http://www.furthercsc.com/user/login.php?error=matricula");
}
elseif (strlen($matricula)>=10) {
    header("location:http://www.furthercsc.com/user/login.php?error=ematricula");
}
elseif (strlen($matricula)<=8) {
    header("location:http://www.furthercsc.com/user/login.php?error=ematricula");
}
else {
    $query = mysql_query("INSERT INTO web_users (matricula, password, nombre, email_itesm, email, apellido) VALUES ('$matricula', '$encypt_password', '$name', '$correo_itesm', '$correo', '$apellido')");
    //error_reporting(E_ALL);
    error_reporting(E_STRICT);

    date_default_timezone_set('America/Monterrey');

    require_once('../config/class.phpmailer.php');
    include("../config/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail             = new PHPMailer();

    $body             = 'This is the HTML message body <b>in bold!</b>';

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                                                                       // 1 = errors and messages
                                                                                       // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "furthercsc@gmail.com";  // GMAIL username
    $mail->Password   = "cscfurther";            // GMAIL password

    $mail->SetFrom('furthercsc@gmail.com', 'Further');

    $mail->AddReplyTo("furthercsc@gmail.com","Further");

    $mail->Subject    = "Registro - " . $matricula;

    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail->Body    = 'Hola '.$matricula.', <br/> Para confirmar haz clic <a href="http://www.furthercsc.com/user/confirmacion.php?userid='.$userid.'&confauth=x3FF65hXD">aqui. </a> Si no funciona el link copia esto en tu navegador: <a href="http://www.furthercsc.com/user/confirmacion.php?userid='.$userid.'&confauth=x3FF65hXD">http://www.furthercsc.com/user/confirmacion.php?userid='.$userid.'&confauth=x3FF65hXD</a><br/>Gracias,<br/>Further';

    $address = $correo_itesm;
    $mail->AddAddress($address, $matricula);

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
      header("location:http://www.furthercsc.com/user/login.php?conf=mandada&temail=".$correo_itesm);
    }
}
?>