<?php
session_start();
$fecha = $_GET['usr_date'];
include("database.php");
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
    .semana {
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
    .resultado {
      padding: 60px;
      margin-bottom: 30px;
      color: inherit;
      background-color: white;
      -webkit-border-radius: 6px;
	 -moz-border-radius: 6px;
	      border-radius: 6px;
}
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

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
      <br/>
      <div class="row">
	<div class="span2">
	<!--
	<a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 10px; padding-bottom: 10px;"></a>
	<a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 10px; padding-bottom: 10px;"></a>
	-->
	</div>
	<div class="span8">
	  <div class="alert">
	    <button type="button" class="close" data-dismiss="alert">&times;</button>
	    <strong>&iexcl;Advertencia vBeta!</strong> La p&aacute;gina esta en desarrollo. Beta V.0.1
	  </div>
	  <div class="hero-unit" id="bb">
	    <h3>Busca Asesorias de Estudiante a Estudiante</h3>
	    <p>Hoy es:
	    <?php
	    date_default_timezone_set('America/Monterrey');
	    echo date("F j, Y, g:i a"); ?>
	    </p>
	    <form action="asesoria.php" method="get">
	      <fieldset>
		<p>Materia: <select name="materia"><option value="sm" selected>Selecciona Materia</option>
			<?php
                                      $query = mysql_query("SELECT * FROM lista_materias");
                                      $numrows=@mysql_num_rows($query);
                                      if($numrows != 0) {
                                      while ($result = mysql_fetch_array($query)) {
                                      ?>
									  <option value="<?php echo $result['id']; ?>"><?php echo $result['materia']; ?></option>
                                      <?php } } else {
                                        echo "<div class=\"alert alert-info\">Es una lastima, hubo un problema. <b>:'(</b> </div>"; }?>
			
		</select></p>
		<input type="submit" name="submit" class="btn btn-primary btn-large" id="submit_btn" value="Buscar"/>
	      </fieldset>
	    </form>
	    
	  </div>
	  <div class="resultado">
	    <h2>Resultados</h2>
	    <?php
	    $fecha = date('Y-m-d', strtotime($fecha));
	    $materia = $_GET['materia'];
	    $user_cond = "materia_id='$materia'";
	    ?>
	    <?php
	      $query = mysql_query("SELECT * FROM asesoriasv0_1 WHERE $user_cond AND ocupada='0' ORDER BY fecha ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <div class="well well-small">
	      <p><b>Dia y Hora:</b> <?php echo date('D, d M Y h:i A', strtotime($result['fecha'])); ?>, <b>Tutor:</b> <?php echo $result['tutor']; ?>, <b>Lugar:</b> <?php echo $result['lugar']; ?>,
		<form method="get" action="setcita.php">
		  <input type="hidden" name="usr_matricula" value="<?php echo $_SESSION['userlogin']; ?>" />
		  <input type="hidden" name="usr_citaid" value="<?php echo $result['id']; ?>" />
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		</form>
	      </p>
	      </div>
	      <?php } } else { ?>
	          <div class="alert alert-info">
		  <p><b>Oohh-Oh!</b> No hay nada en esta categoria, pero si estas interesado manda un correo a contacto@furthercsc.com</p>
		  </div>
	      <?php }?>
	  </div>
	</div>
	<div class="span2">
	<!--
	<a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 10px; padding-bottom: 10px;"></a>
	<a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 10px; padding-bottom: 10px;"></a>
	-->
	</div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });
    </script>
    
  </body>
</html>