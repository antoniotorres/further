<html>
  <head>
    <title>PHPMailer - SMTP (Gmail) basic test</title>
  </head>
  <body>

    <?php
	if ($_GET['hacercita']=='hacercita')
	{
		if ($_POST['materia']=='sm') {
		header("Location: asesoria.php?mailsend=error");
		exit();
		}
		//error_reporting(E_ALL);
		error_reporting(E_STRICT);

		//date_default_timezone_set('America/Toronto');

		require_once('config/class.phpmailer.php');
		include("config/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

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

		$mail->Subject    = "Cita - " . $_GET['usr_name'];

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->Body    = 'Hola '. $_GET['usr_name'] . ', <br/> Gracias por utilizar nuestra página para hacer citas. Para terminar el proceso es necesario que confirmes tu asistencia. Haz clic <a href="http://www.furthercsc.com/confirmacion.php?id='. $_GET['citaid'] .'&dia='. $_GET['dia'] .'&usr_name='. $_GET['usr_name'] .'&usr_email='. $_GET['usr_email'] .'&mandar=mandar">aqui</a>. O si no funciona pega esto en tu navegador:<br/>http://www.furthercsc.com/confirmacion.php?id='. $_GET['citaid'] .'&dia='. $_GET['dia'] .'&usr_name='. $_GET['usr_name'] .'&usr_email='. $_GET['usr_email'] .'&mandar=mandar<br/>Gracias,<br/>Further';

		$address = $_GET['usr_email'];
		$mail->AddAddress($address, $_GET['usr_name']);

		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  echo "Message sent!";
		  header("Location: asesoria.php?confirmacion=mandada&id=paso2&email=". $_GET['usr_email']);
		}
	}
	elseif ($_GET['formar-parte']=='Mandar')
	{
		//error_reporting(E_ALL);
		error_reporting(E_STRICT);

		//date_default_timezone_set('America/Toronto');

		require_once('config/class.phpmailer.php');
		include("config/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

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

		$mail->Subject    = "Forma Parte - " . $_GET['usr_name'];

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->Body    = 'El estudiante '. $_GET['usr_name'] .' quiere formar parte de Further. <br/> 
		Su correo es '. $_GET['usr_email'] .'<br/>
		Su matricula es '. $_GET['usr_matricula'] .'<br/>
		Esta cursando '. $_GET['usr_semestre'] .'<br/>
		Busca ser '. $_GET['usr_staff'] .'<br/>
		Especificamente en '. $_GET['usr_area'] .'<br/>
		Promedio General: '. $_GET['usr_promg'] .'<br/>
		Promedio Acumulado: '. $_GET['usr_proma'] .'<br/>
		Quiere formar parte de Further por: '. $_GET['usr_porque'] .'<br/>
		';

		$address = 'contacto@furthercsc.com';
		$mail->AddAddress($address, $_GET['usr_name']);

		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  echo "Message sent!";
		  header("Location: info.php?confirmacion=mandada&");
		}
	}
	elseif ($_GET['publicidad']=='Mandar')
	{
		//error_reporting(E_ALL);
		error_reporting(E_STRICT);

		//date_default_timezone_set('America/Toronto');

		require_once('config/class.phpmailer.php');
		include("config/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

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

		$mail->Subject    = "Publicidad - " . $_GET['usr_name'];

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->Body    = 'La persona '. $_GET['usr_name'] .' de la empresa '. $_GET['usr_empresa'] .' quiere publicar su anuncio en la pagina. <br/> 
		Su correo es '. $_GET['usr_email'] .'<br/>
		Su telefono es '. $_GET['usr_telefono'] .'<br/>
		Esta buscando poner este tipo de anuncio: '. $_GET['usr_anuncio'] .'<br/>
		
		Mandado de http://furthercsc.com/publicidad.php
		';

		$address = 'contacto@furthercsc.com';
		$mail->AddAddress($address, $_GET['usr_name']);

		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  echo "Message sent!";
		  header("Location: publicidad.php?confirmacion=mandada&");
		}
	}
  ?>

  </body>
</html>
