<?php
  include("database.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Further</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Further CSC, tiene el proposito de ayudar al estudiante a traves de videos y asesorias.">
    <meta name="author" content="Jose Antonio Torres">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
        <style type="text/css">
	      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 40px;
      padding-bottom: 0px;
      color: #5a5a5a;
	  background-color: #4099FF;
    }
    #bb {
      background-color: white;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: 0px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: 0px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }
    
    }
    @media (max-width: 480px) {

      .navbar-inner {
        margin: 0px;
      }
      #titulo {
	font-size: 32px;
      }
      .detalles {
	font-size: 14px;
      }
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
    <div class="container" id="bb">

      <!-- Sobre Further -->
    <div class="row">
		<div class="span2"></div>
	  <div class="span8">
		<h1>Further</h1>
		<hr>
		<br/><br/>
		<img src="img/staff.jpg" alt="Further" style="padding-bottom: 10px;" width="500px">
		<h4>Ayuda</h4>
		<p>Ayudar a una escuela de bajos recursos al participar en colectas de art&iacute;culos escolares, boteadas y eventos recreativos para los ni&ntilde;os de la escuela.</p>
		<h4>Imagen</h4>
		<p>Crear video-tutoriales cortos sobre los temas m&aacute;s solicitados por los alumnos de la prepa (ve los videos ya disponibles en Video-tutoriales para ver qu&eacute; clase de videos har&iacute;as)</p>
		<h4>Asesores</h4>
		<p>Proporcionar asesor&iacute;a a los alumnos de la prepa durante las horas libres que el asesor elija.</p>
	    <div class="hero-unit" id="formar-parte">
	      <h2>Formar Parte</h2>
	      <h4>Si quieres formar parte de further llena la siguiente forma.</h3>
			<form action="mailer.php" method="get">
				<fieldset>
					<p><input name="usr_name" type="text" id="txtbox" placeholder="Nombre" required></p>
					<p><input name="usr_email" type="email" placeholder="Email" required></p>
					<p><input name="usr_matricula" type="text" placeholder="Matricula" required></p>
					<p><input name="usr_semestre" type="text" placeholder="Semestre que cursas" required></p>
					<p>Tipo de Staff 
					<select name="usr_staff">
						<option value="sm" selected>Selecciona Staff</option>
						<option value="asesores">Asesores</option>
						<option value="imagen">Imagen</option>
						<option value="ayuda">Ayuda</option>
					</select>
					</p>
					<p>Area <small> - En caso de elegir Imagen o Asesor </small>
					<select name="usr_area">
						<option value="sm" selected>Selecciona Area</option>
						<option value="matematicas">Matem&aacute;ticas</option>
						<option value="histora">Historia</option>
						<option value="ciencias">Ciencias</option>
					</select>
					</p>
					<p><input name="usr_promg" type="text" placeholder="Promedio General"></p>
					<p><input name="usr_proma" type="text" placeholder="Promedio en &Aacute;rea Seleccionada"></p>
					<p><input name="usr_porque" type="text" placeholder="&iquest;Por qu&eacute; quieres formar parte de Further?"></p>
					
					<p><input type="submit" name="formar-parte" class="btn btn-primary btn-large" id="submit_btn" value="Mandar"/></p>
				
				</fieldset>
			</form>
	    </div>
	      <!-- Example row of columns -->
	  </div>
	  <div class="span2"></div>
    </div> 

</div> <!-- /container -->
      <!-- Footer-->
      <?php include 'footer.php'; ?>

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
