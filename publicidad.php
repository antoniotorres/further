<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Further - Publicidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Further CSC, tiene el proposito de ayudar al estudiante a traves de videos y asesorias.">
    <meta name="author" content="Jose Antonio Torres">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 50px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/icons/favicon.ico">
  </head>

  <body>
    <?php include 'header.php'; ?>
    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#ventajas">Ventajas</a></li>
        </ul>
        <h3 class="muted">Further Publicidad</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Pon tu anuncio en FURTHERCSC.COM!</h1>
        <p class="lead">&iquest;Est&aacute;s buscando promocionar tu producto o servicio? Furthercsc.com puede ser tu soluci&oacute;n, con un mercado enfocado en los j&oacute;venes podr&aacute;s tener mucho alcance y ayudara a esta organizaci&oacute;n.</p>
        <button class="btn btn-large btn-success" id="hideshow" data-toggle="collapse" data-target="#demo">Contactanos</button>
      </div>
      <div id="demo" class="collapse in">
        <div class="hero-unit">
          <h2>&iquest;Quieres poner tus anuncios en Further?</h2>
	      <p class="lead">Llena la forma con tus datos y muy pronto nos pondremos en contacto con usted.</p>
	      <form action="mailer.php" method="get">
		<fieldset>
		<p><input name="usr_name" type="text" placeholder="Nombre" required></p>
                <p><input name="usr_empresa" type="text" placeholder="Empresa" required></p>
		<p><input name="usr_email" type="email" placeholder="Email" required></p>
		<p><input name="usr_telefono" type="text" placeholder="Telefono" required></p>
		<p><input name="usr_anuncio" type="text" placeholder="Tipo de Anuncio Eje. Imagen, Video, Animacion"></p>
		<p><input type="submit" name="publicidad" class="btn btn-primary btn-large" id="submit_btn" value="Mandar"/></p>
		
		</fieldset>
		</form>
        </div>
      </div>
      <?php
	if ($_GET['confirmacion'] == 'mandada') {
      ?>
      <div class="alert alert-success">
	    <p><b>Solicitud Mandada!</b> Muy pronto nos pondremos en contacto con ustedes.</p>
	    </div>
      <?php } ?>
 </div> <!-- /container -->
      <!-- Footer-->
      <?php include 'footer.php'; ?>

   

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
	    $(".collapse").collapse()
    });
    </script>
  </body>
</html>
