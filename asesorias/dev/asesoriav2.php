<?php
  include("database.php");
  $materia = $_GET['materia'];
  function findMateriaName($var0) {
	      $materia_cond = "id='$var0'";
	      $query = mysql_query("SELECT * FROM lista_materias WHERE $materia_cond");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
		 echo $result['materia'];
	       } } else {
		echo "No Disponible"; }
  }
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
    .semana p {
      position: relative;
      top: 70px;
      float: right;
      padding-right: 10px;
      color: white;
    }
    
    #descripcion p {
      font-size: 14px;
    }
    
    #lunes_horarios {
      display: none;
      font-size: 14px;
    }
     #martes_horarios {
      display: none;
      font-size: 14px;
    }
     #miercoles_horarios {
      display: none;
      font-size: 14px;
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
        margin: 0px 0;
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
        margin: 0px;
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
    #paso2 {
	display: none;
      }
    #paso3 {
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
	    <strong>&iexcl;Advertencia!</strong> La p&aacute;gina esta en desarrollo.
	  </div>
	  <div class="hero-unit" id="bb">
	    <h3>Busca Asesorias de Estudiante a Estudiante</h3>
	    <p>Esta Semana:</p>
	    <p>Hoy es:
	    <?php
	      // set current date
		  $tdate = date("l");
		  if ($date == "Friday") {
		    echo "Viernes";
		  }

	    ?>
	    
	    </p>
	    <br/>
	    <div id="lunes" class="semana">
	      <p>Lunes</p>
	    </div>
	    <div id="martes" class="semana">
	      <p>Martes</p>
	    </div>
	    <div id="miercoles" class="semana">
	      <p>Miercoles</p>
	    </div>
	    <div id="jueves" class="semana">
	      <p>Jeuves</p>
	    </div>
	    <div id="viernes" class="semana">
	      <p>Viernes</p>
	    </div>
	    <div id="descripcion">
	      <p> (Gray) Ya paso <br/>
	       (Red) No hay nada Disponible <br/>
	       (Green) Hay algo Disponible</p>
	    </div>
	    <div id="lunes_horarios">
	      <h3>Lunes</h3>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>Hora <i class="icon-chevron-down"></i></th>
		  <th>Materia <i class="icon-chevron-down"></i></th>
		  <th>Tutor <i class="icon-chevron-down"></i></th>
		  <th>Lugar <i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM horario WHERE lunes = '1' AND lunocupada = '0' ORDER BY lunhora ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <tr style="background-color: white">
		<td><?php echo date('h:i A', strtotime($result['lunhora'])); ?></td>
		<td><?php findMateriaName($result['materia']); ?></td>
		<td><?php echo $result['tutor']; ?></td>
		<td><?php echo $result['lugar']; ?></td>
		<td>
		  <form method="get" action="mailer.php">
		  <input type="hidden" name="usr_name" value="<?php echo $_GET['usr_name']; ?>" />
		  <input type="hidden" name="usr_email" value="<?php echo $_GET['usr_email']; ?>" />
		  <input type="hidden" name="dia" value="lunocupada" />
		  <input type="hidden" name="citaid" value="<?php echo $result['id']; ?>" />
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		  </form>
		</td>
	      </tr>
	      <?php } } else {
		echo "No Disponible"; }?>
	      </table>
	    </div>
	    <div id="martes_horarios">
	      <h3>Martes</h3>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>Hora <i class="icon-chevron-down"></i></th>
		  <th>Materia <i class="icon-chevron-down"></i></th>
		  <th>Tutor <i class="icon-chevron-down"></i></th>
		  <th>Lugar <i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM horario WHERE martes = '1' AND marocupada = '0' ORDER BY marhora ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <tr style="background-color: white">
		<td><?php echo date('h:i A', strtotime($result['marhora'])); ?></td>
		<td><?php findMateriaName($result['materia']); ?></td>
		<td><?php echo $result['tutor']; ?></td>
		<td><?php echo $result['lugar']; ?></td>
		<td>
		  <form method="get" action="mailer.php">
		  <input type="hidden" name="usr_name" value="<?php echo $_GET['usr_name']; ?>" />
		  <input type="hidden" name="usr_email" value="<?php echo $_GET['usr_email']; ?>" />
		  <input type="hidden" name="dia" value="lunocupada" />
		  <input type="hidden" name="citaid" value="<?php echo $result['id']; ?>" />
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		  </form>
		</td>
	      </tr>
	      <?php } } else {
		echo "No Disponible"; }?>
	      </table>
	    </div>
	    <div id="miercoles_horarios">
	      <h3>Miercoles</h3>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>Hora <i class="icon-chevron-down"></i></th>
		  <th>Materia <i class="icon-chevron-down"></i></th>
		  <th>Tutor <i class="icon-chevron-down"></i></th>
		  <th>Lugar <i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM horario WHERE miercoles = '1' AND mieocupada = '0' ORDER BY miehora ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <tr style="background-color: white">
		<td><?php echo date('h:i A', strtotime($result['miehora'])); ?></td>
		<td><?php findMateriaName($result['materia']); ?></td>
		<td><?php echo $result['tutor']; ?></td>
		<td><?php echo $result['lugar']; ?></td>
		<td>
		  <form method="get" action="mailer.php">
		  <input type="hidden" name="usr_name" value="<?php echo $_GET['usr_name']; ?>" />
		  <input type="hidden" name="usr_email" value="<?php echo $_GET['usr_email']; ?>" />
		  <input type="hidden" name="dia" value="lunocupada" />
		  <input type="hidden" name="citaid" value="<?php echo $result['id']; ?>" />
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		  </form>
		</td>
	      </tr>
	      <?php } } else {
		echo "No Disponible"; }?>
	      </table>
	    </div>
	    <div id="jueves_horarios">
	      <h3>Jueves</h3>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>Hora <i class="icon-chevron-down"></i></th>
		  <th>Materia <i class="icon-chevron-down"></i></th>
		  <th>Tutor <i class="icon-chevron-down"></i></th>
		  <th>Lugar <i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM horario WHERE jueves = '1' AND jueocupada = '0' ORDER BY juehora ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <tr style="background-color: white">
		<td><?php echo date('h:i A', strtotime($result['miehora'])); ?></td>
		<td><?php findMateriaName($result['materia']); ?></td>
		<td><?php echo $result['tutor']; ?></td>
		<td><?php echo $result['lugar']; ?></td>
		<td>
		  <form method="get" action="mailer.php">
		  <input type="hidden" name="usr_name" value="<?php echo $_GET['usr_name']; ?>" />
		  <input type="hidden" name="usr_email" value="<?php echo $_GET['usr_email']; ?>" />
		  <input type="hidden" name="dia" value="lunocupada" />
		  <input type="hidden" name="citaid" value="<?php echo $result['id']; ?>" />
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		  </form>
		</td>
	      </tr>
	      <?php } } else {
		echo "No Disponible"; }?>
	      </table>
	    </div>
	  </div>
	</div>
	<div class="span2">
	<!--
	  <a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 0px; padding-bottom: 10px;"></a>
	  <a href="http://www.furthercsc.com/publicidad.php"><img src="img/furtheranuncio.jpg" alt="Further Patrocinio" style="padding-left: 0px; padding-bottom: 10px;"></a>
	-->
	</div>
	
      </div>
      <!-- Footer-->
     </div> <!-- /container --> 
      <?php include 'footer.php'; ?>

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
      <script type="text/javascript">
	document.getElementById('lunes_horarios').style.display = 'none';
	document.getElementById('martes_horarios').style.display = 'none';
	document.getElementById('miercoles_horarios').style.display = 'none';
	document.getElementById('jueves_horarios').style.display = 'none';
	document.getElementById('viernes_horarios').style.display = 'none';
	function NoDisponible(var0) 
	{
	    document.getElementById(var0).style.backgroundColor = 'red';
	}
	function Disponible(var0) 
	{
	    document.getElementById(var0).style.backgroundColor = 'green';
	}
	function Disable(var0) 
	{
	    document.getElementById(var0).style.backgroundColor = 'gray';
	    var div = document.getElementById(var0+'_horarios');
	    div.style.display = 'none';
	}
	function Horarios(var1) {
	  var button = document.getElementById(var1); // Assumes element with id='button'
	  button.onclick = function() {
	      var div = document.getElementById(var1+'_horarios');
	      if (div.style.display == 'none') {
		  div.style.display = 'block';
		  document.getElementById(var1+'_horarios').scrollIntoView(true);
	      }
	      else if (div.style.display == 'block'){
		  div.style.display = 'none';
	      }
	  }	
	};
      </script>
      <?php
	//Lunes
	$query = mysql_query("SELECT * FROM horario WHERE lunes = '1' AND lunocupada = '0'");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	  if (checkIfDisable(1)==FALSE) {
	  echo "<script type=\"text/javascript\">Disable('lunes')</script>"; 
	  }
	  else {
	    echo "<script type=\"text/javascript\">Disponible('lunes')</script>";
	    echo "<script type=\"text/javascript\">Horarios('lunes')</script>";
	  }
	  
	}
	else {
	  echo "<script type=\"text/javascript\">NoDisponible('lunes')</script>";
	}
	//Martes
	$query = mysql_query("SELECT * FROM horario WHERE martes = '1' AND marocupada = '0'");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	  if (checkIfDisable(2)==FALSE) {
	    echo "<script type=\"text/javascript\">Disable('martes')</script>"; 
	  }
	  else {
	    echo "<script type=\"text/javascript\">Disponible('martes')</script>";
	    echo "<script type=\"text/javascript\">Horarios('martes')</script>";
	  }
	}
	else {
	  echo "<script type=\"text/javascript\">NoDisponible('martes')</script>";
	}
	//Miercoles
	$query = mysql_query("SELECT * FROM horario WHERE miercoles = '1' AND mieocupada = '0'");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	  echo "<script type=\"text/javascript\">Disponible('miercoles')</script>";
	  echo "<script type=\"text/javascript\">Horarios('miercoles')</script>";
	}
	else {
	  echo "<script type=\"text/javascript\">NoDisponible('miercoles')</script>";
	}
	//Jueves
	$query = mysql_query("SELECT * FROM horario WHERE jueves = '1' AND jueocupada = '0'");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	  echo "<script type=\"text/javascript\">Disponible('jueves')</script>";
	  echo "<script type=\"text/javascript\">Horarios('jueves')</script>";
	}
	else {
	  echo "<script type=\"text/javascript\">NoDisponible('jueves')</script>";
	}
	//Viernes
	$query = mysql_query("SELECT * FROM horario WHERE viernes = '1' AND vieocupada = '0'");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	  echo "<script type=\"text/javascript\">Disponible('viernes')</script>";
	  echo "<script type=\"text/javascript\">Horarios('viernes')</script>";
	}
	else {
	  echo "<script type=\"text/javascript\">NoDisponible('viernes')</script>";
	}
	function checkIfDisable($var1){
	  $date = date("N");
	  if ($var1 == 1) {
	    $date1 = date("N")+4;
	    $var2 = $date + $date1;
	    if ($var2 == 5) {
	      return TRUE;
	    }
	    else {
	      return FALSE;
	    }
	  }
	  if ($var1 == 2) {
	    $date1 = date("N")+3;
	    $var2 = $date + $date1;
	    if ($var2 == 5) {
	      return TRUE;
	    }
	    else {
	      return FALSE;
	    }
	  }	
	}
      ?>
  </body>
</html>
 