<?php
session_start();
include("../database.php");
include_once("../settings.php")
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
    <link href="../css/bootstrap-select.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
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
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../img/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../img/icons/favicon.ico">
  </head>

  <body>
    <?php include "../header.php"; ?>
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
          <?php
            if ($_GET['msg']=='successful') {
          ?>
            <div class="alert alert-block alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Cita Exitosa!</h4>
              Tu cita fue creada exitosamente, un mensaje fue enviado a tu correo para recordarte de la cita. 
            </div>
          <?php
            }
          ?>
	  <div class="hero-unit" id="bb">
	    <h3>Busca Asesorias de Estudiante a Estudiante</h3>
	    <p>Hoy es:
	    <?php
	    date_default_timezone_set('America/Monterrey');
	    echo date("F j, Y, g:i a"); ?>
	    </p>
	    <form>
	      <fieldset>
		<p>Materia:
                    <select name="materia" class="selectpicker" data-style="btn-info" onchange="showUser(this.value)">
                        <option value="sm" selected>Selecciona Materia</option>
                            <?php
                                          $query = mysql_query("SELECT * FROM lista_materias");
                                          $numrows=@mysql_num_rows($query);
                                          if($numrows != 0) {
                                          while ($result = mysql_fetch_array($query)) {
                                          ?>
                                            <option value="<?php echo $result['id']; ?>"><?php echo $result['materia']; ?></option>
                                          <?php } } else {
                                            echo "<div class=\"alert alert-info\">Es una lastima, hubo un problema. <b>:'(</b> </div>"; }?>
                            
                    </select>
                </p>
	      </fieldset>
	    </form>
	    
	  </div>
	  <div class="resultado" id="resultados">
	    <h2>Resultados</h2>
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
    <?php include '../footer.php'; ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });
    </script>
    <script>
    function showUser(str)
    {
    if (str=="")
      {
      document.getElementById("resultados").innerHTML="";
      return;
      }
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("resultados").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","change.php?materia="+str,true);
    xmlhttp.send();
    }
    </script>
  </body>
</html>