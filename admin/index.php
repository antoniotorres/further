<?php
session_name("FurtherAdmin");
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
}
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
    <style type="text/css">
	      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
	  padding-top: 50px;
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
	  </div>
      <?php include 'footer.php'; ?>

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>