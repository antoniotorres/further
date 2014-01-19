<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Further</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jose Antonio Torres">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
	      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
	  padding-top: 50px;
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
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
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Further</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="asesoria.php">Asesorias</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutoriales <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!-- <li class="divider"></li> -->
                  <li class="nav-header">Por Materia</li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">Matematicas</a>
					<ul class="dropdown-menu">
					<li><a href="#">Matematicas I</a></li>
					<li><a href="#">Trigonometria</a></li>
					<li><a href="#">Calculo</a></li>
					<li><a href="#">Matematicas III</a></li>
					<li><a href="#">Matematicas V</a></li>
					<li><a href="#">Matematicas Superior (BI 3°)</a></li>
					<li><a href="#">Matematicas Superior (BI 3°)</a></li>
					</ul>
				  </li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">Historia</a>
					<ul class="dropdown-menu">
					<li><a href="#">Evolución de las Grandes Civilizaciones</a></li>
					<li><a href="#">Historia III</a></li>
					<li><a href="#">Escenarios II</a></li>
					<li><a href="#">Historia Superior I (BI 3°)</a></li>
					<li><a href="#">Historia Superior III (BI 5°)</a></li>
					</ul>
				  </li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">Ciencias</a>
					<ul class="dropdown-menu">
					<li><a href="#">Ciencias de la Vida</a></li>
					<li><a href="#">Quimica I</a></li>
					<li><a href="#">Fisica I</a></li>
					<li><a href="#">Quimica (BI 3°)</a></li>
					<li><a href="#">Sistemas Ambientales y Sociedades (BI 5°)</a></li>
					</ul>
				  </li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">BI Adicional</a>
					<ul class="dropdown-menu">
					<li><a href="#">Empresa y Gestión I (BI 3°)</a></li>
					<li><a href="#">Empresa y Gestión III (BI 5°)</a></li>
					<li><a href="#">Tecnología de la información en una sociedad global I (BI 3°)</a></li>
					<li><a href="#">Tecnología de la información en una sociedad global III (BI 5°)</a></li>
					<li><a href="#">IB Tips</a></li>
					</ul>
				  </li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">Español</a>
					<ul class="dropdown-menu">
					<li><a href="#">Español I (Multicultural 1°)</a></li>
					<li><a href="#">Español III (Multicultural 3°)</a></li>
					<li><a href="#">Español V (Multicultural 5°)</a></li>
					<li><a href="#">Lenguaje y Literatura (BI 3°)</a></li>
					<li><a href="#">Lenguaje y Literatura (BI 5°)</a></li>
					</ul>
				  </li>
				  <li class="dropdown-submenu">
					<a tabindex="-1" href="#">Computación</a>
					<ul class="dropdown-menu">
					<li><a href="#">Computación I (Multicultural 1°)</a></li>
					<li><a href="#">Computación V (Multicultural 5°)</a></li>
					</ul>
				  </li>
                </ul>
              </li>
            </ul>
            <!--<form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Matricula">
              <input class="span2" type="password" placeholder="Contraseña">
              <button type="submit" class="btn">Sign in</button>
            </form>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Crea una Cita</h1>
        <p>Esta es la forma para hacer una cita, llena todo lo requerido y luego preciona mandar. Momentos despues un coordinador te confirmira.</p>
        <form action="mailer.php" method="post">
		<fieldset>
		<p><input name="usr_name" size="25" type="text" id="txtbox" placeholder="Nombre"></p>
		<p><input name="usr_email" size="25" type="text" id="txtbox" placeholder="Email"> <span class="label label-warning">¡A este correo mandaremos la confirmacion!</span></p>
        <p><select name="materia">
			<option value="sm" selected>Selecciona Materia</option>
			<option value="saab">Matemáticas I (Multicultural 1°)</option>
			<option value="saab">Trigonometría (Multicultural 3°)</option>
			<option value="saab">Calculo (Multicultural 5°)</option>
			<option value="saab">Matemáticas III (BI 3°)</option>
			<option value="saab">Matemáticas V (BI 5°)</option>
			<option value="saab">Matemáticas Superior (BI 3°)</option>
			<option value="saab">Matemáticas Superior (BI 5°)</option>
			<option value="saab">Evolución de las Grandes Civilizaciones (Multicultural 1°)</option>
			<option value="saab">Historia III (Multicultural 3°)</option>
			<option value="saab">Escenarios II (Multicultural 5°)</option>
			<option value="saab">Historia Superior I (BI 3°)</option>
			<option value="saab">Historia Superior III (BI 5°)</option>
			<option value="saab">Ciencias de la vida (Multicultural 1°)</option>
			<option value="saab">Química I (Multicultural 3°)</option>
			<option value="saab">Física I (Multicultural 5°)</option>
			<option value="saab">Química (BI 3°)</option>
			<option value="saab">Sistemas Ambientales y Sociedades (BI 5°)</option>
			<option value="saab">Empresa y Gestión I (BI 3°)</option>
			<option value="saab">Empresa y Gestión III (BI 5°)</option>
			<option value="saab">Tecnología de la información en una sociedad global I (BI 3°)</option>
			<option value="saab">Tecnología de la información en una sociedad global III (BI 5°)</option>
			<option value="saab">IB Tips</option>
			<option value="saab">Español I (Multicultural 1°)</option>
			<option value="saab">Español III (Multicultural 3°)</option>
			<option value="saab">Español V (Multicultural 5°)</option>
			<option value="saab">Lenguaje y Literatura (BI 3°)</option>
			<option value="saab">Lenguaje y Literatura (BI 5°)</option>
			<option value="saab">Computación I (Multicultural 1°)</option>
			<option value="saab">Computación V (Multicultural 5°)</option>
		</select></p>
		<p><input name="tema" size="25" type="text" id="txtbox" placeholder="Tema"> <span class="label label-warning"> ¡Esto es lo que quieres repasar o estuidar!</span></p>
		<input name="lugar" size="25" type="text" id="txtbox" placeholder="Lugar"></p>
		<input name="fecha" size="25" type="text" id="txtbox" placeholder="Fecha"></p>
		<input name="hora" size="25" type="text" id="txtbox" placeholder="Hora"></p>
		<p><input type="submit" name="submit" class="btn btn-primary btn-large" id="submit_btn" value="Mandar"/></p>
		</fieldset>
		</form>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Ascesorias Estudiantiles</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit. </p>
          <p><a class="btn" href="#">Ver Más &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Busca Videos </h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">Ver Más &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Forma Parte</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Ver Más &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Grupo Estudiantil 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
