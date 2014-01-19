<?php
  include("database.php");
  $dia = $_GET['dia'];
  $user_cond = "$dia='1'";
  $id = $_GET['id'];
  $user_cond2 = "id='$id'";
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
    #exitos {
	display: none;
      }
    #error {
	display: none;
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
    <div class="container">
      <div class="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>&iexcl;Advertencia!</strong> La p&aacute;gina esta en desarrollo.
      </div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div id="exitos" class="hero-unit">
	<h1>Gracias por Confirmar</h1>
        <br/>
	<p>Tu cita fue creada exitosamente y lo &uacute;nico que falta es esperar.</p>
	<p>Si te gusta nuestra p&aacute;gina, te gusta el servicio o nada mas quieres compartir postea  el link en Facebook y Twitter.</p>
      </div>
        <div id="error" class="alert alert-error">
            <p><b>Error</b> Hubo un error y no se pudo crear tu cita.</p>
        </div>
        <hr>
      <!-- Footer-->
      <?php include 'footer.php'; ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <?php
        if($_GET['mandar'] == 'mandar') {
          $result = mysql_query("UPDATE horario SET $user_cond WHERE $user_cond2") or die(mysql_error());
          echo "<script type=\"text/javascript\">document.getElementById('exitos').style.display = 'block';document.getElementById('exitos').scrollIntoView(true);</script>";
        }
        else {
          echo "<script type=\"text/javascript\">document.getElementById('error').style.display = 'block';document.getElementById('error').scrollIntoView(true);</script>";
        }
    ?>
  </body>
</html>
