<?php
session_start();
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
    .desc {
      position: relative;
      display:inline-block;
      width: 100px;
      height: 100px;
      background-color: #333333;
      margin-right:10px;
      margin-bottom: 0px;
      cursor: pointer;
      cursor: hand;
      -webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	  border-radius: 6px;
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
      <div class="row">
	<div class="span2"></div>
	<div class="span8"><br/>
	  <div class="hero-unit">
	    <div class="row-fluid">
		<ul>
		  <li class="span6">
		      <div class="row-fluid">
			<div class="span4">
			  <a href="http://kindsnacks.com.mx/" target="_blank"><img src="img/patrocinadores/kind.jpeg" alt="Further Patrocinio" style="padding-bottom: 5px;"></a>
			</div>
			<div class="span7">
			  <a href="http://www.manejaya.com/wp/" target="_blank"><img src="img/patrocinadores/maneja-logo.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;"></a>
			</div>
			<!-- <div class="span2">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			</div>
			<div class="span2">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			</div>
			<div class="span2">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			  <img src="img/furtherpatrocino.jpg" alt="Further Patrocinio" style="padding-bottom: 5px;">
			</div> -->
		      </div>
		  </li>
		  <li class="span6">
		      <img src="img/furtherlogo.jpg" class="img-polaroid" alt="Further CSC">
		  </li>
		</ul>
	    </div>
	  </div>
	  <!-- B -->
	  <div class="row-fluid">
	    <div class="span6">
	      <h2>Further <small>- Grupo Estudiantil de Prepa Tec CSC</small></h2>
	      <p><em>Further</em> es un grupo estudiantil que se encarga de apoyar a la educaci&oacute;n en M&eacute;xico. En esta p&aacute;gina podr&aacute;s crear tu cita para que recibas ayuda de un alumno asesor, o si lo prefieres, ver video tutoriales realizados por alumnos de la Prepa Tec. Si quieres formar parte del grupo, tambi&eacute;n existe la posibilidad de ser staff durante las actividades que el grupo realizar&aacute; a trav&eacute;s del semestre con el prop&oacute;sito de ayudar a una escuela con bajos recursos.</p></div>
	    <div class="span6"><img src="img/staff.jpg" alt="Further Patrocinio" style="padding-bottom: 10px;"></div>
	  </div>
	  <div class="row">
	    <div class="span4">
	      <h3>Pide asesor&iacute;a</h3>
	      <p>
		En estos momentos nuestra p&aacute;gina esta en construcci&oacute;n pocas cosas de ella se encuentran funcionando. Si deseas ver la p&aacute;gina eres libre de explorar mientras se termina la p&aacute;gina.
	      </p>
	      <p><a class="btn btn-warning" href="asesoria.php">Ver M&aacute;s &raquo;</a></p>
	    </div>
	    <div class="span4">
	      <h3>Busca video tutoriales</h3>
	      <p>
		Si no entiendes, no logras concentrarte, o le entiendes m&aacute;s a los videos utiliza nuestro banco de videos. Encuentra videos sobre temas y materias de la Prepa Tec CSC. Materias como Matem&aacute;ticas, Espa&ntilde;ol, Historia. Busca ahora.
	      </p>
	      <p><a class="btn btn-warning" href="ayuda.php">Ver M&aacute;s &raquo;</a></p>
	   </div>
	    <div class="span4">
	      <h3>Forma parte/solicitud de staff</h3>
	      <p>
		Queires formar parte de Further, quisieras ser un asesor o ser un staff de imagen?
	      </p>
	      <p><a class="btn btn-warning" href="info.php#formar-parte">Ver M&aacute;s &raquo;</a></p>
	    </div>
	  </div>
	  </div>
		<div class="span1"></div>
	  </div>
      <!-- Footer-->
      </div> <!-- /container -->
      <?php include 'footer.php'; ?>

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>