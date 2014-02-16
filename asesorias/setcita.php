<?php
  include("../database.php");
  include_once("../settings.php");

session_name("FurtherUser");
session_start();
if(!isset($_SESSION['username'])){
header("location:$further_host/user/login.php");
}

  $matricula = $_GET['usr_matricula'];
  $matricula_cond = "email='$matricula'";
  $citaid = $_GET['usr_citaid'];
  if ($_GET['hacercita']=='hacercita')
  {
    $query = mysql_query("SELECT * FROM web_users WHERE $matricula_cond");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
      $matricula_id = $result['id'];
      $matricula_email = $result['email'];
      $matricula_nombre = $result['nombre'];
     } } else {
      $matricula_id = "0";
       }
    $user_cond = "id='$citaid'";
    $user_cond2 = "user='$matricula_id'";
    $query = mysql_query("SELECT * FROM asesoriasv0_1 WHERE $user_cond");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
      $asesoria_fecha = $result['fecha'];
      $asesoria_lugar = $result['lugar'];
      $tutor = $result['tutor'];
     } } else {
      echo "Error 0x120";
    }
    $user_cond3 = "id='$tutor'";
    $query = mysql_query("SELECT * FROM web_users WHERE $user_cond3 ORDER BY ID ASC");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    $asesoria_asesor = $result['nombre'];
    $asesoria_email = $result['email'];
    } } else {
    $asesoria_asesor = "Nadie"; }
    $query = mysql_query("UPDATE asesoriasv0_1 SET ocupada='1', $user_cond2 WHERE $user_cond");
    
    date_default_timezone_set('America/Monterrey');

    if ($numrows != 0){
      require_once('../config/class.phpmailer.php');
      $mail             = new PHPMailer();
      $mail->IsSMTP(); // telling the class to use SMTP
      $mail->SMTPAuth   = true;                  // enable SMTP authentication
      $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
      $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
      $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
      $mail->Username   = "furthercsc@gmail.com";  // GMAIL username
      $mail->Password   = "cscfurther";            // GMAIL password
  
      $mail->SetFrom('furthercsc@gmail.com', 'Further');
      $mail->AddReplyTo("furthercsc@gmail.com","Further");
  
      $mail->Subject    = "Cita - " . $matricula;
      $body = '<html><body>Hola '.$matricula.', <br/> Haz creado una cita en Further!<br/>Tu asesor es: '.$asesoria_asesor.'<br/>El '.date('D, d M Y h:i A', strtotime($asesoria_fecha)).'<br/> En: '.$asesoria_lugar.'  <br/>Gracias,<br/>Further</body></html>';
      $mail->MsgHTML($body);
      $mail->AddAddress($matricula_email, $matricula);
  
      if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
	echo "Message sent!";
      }
    }
    if ($numrows != 0) { 
      $mail->Subject    = "Cita Ocupada - " . $asesoria_asesor;
  
      $body = '<html><body>Hola '.$asesoria_asesor.', <br/> Alguien a ocupado tu cita en Further!<br/>Su nombre es: '.$matricula_nombre.'<br/> Su correo es: '.$matricula_email.'<br/> Su matricula es: '.$matricula.'<br/>El '.date('D, d M Y h:i A', strtotime($asesoria_fecha)).'<br/> En: '.$asesoria_lugar.'<br/>Gracias,<br/>Further</body></html>';
      $mail->MsgHTML($body);
      $mail->AddAddress($asesoria_email, $asesoria_asesor);
  
      if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
	echo "Message sent!";
	header("location:$further_host/asesorias/?msg=successful");
      }
    }
  }
?>