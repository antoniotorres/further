<?php
  include("../database.php");
  include_once("../settings.php");
  $mid = ' '.$_GET['mid'].',';
  //$user_cond = "mid='$mid'";

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
    .bb {
      padding-top: 30px;
      padding-bottom: 30px;
      padding-left: 10px;
      padding-right: 10px;
      margin-bottom: 30px;
      color: inherit;
      background-color: white;
      -webkit-border-radius: 6px;
	 -moz-border-radius: 6px;
	      border-radius: 6px;
    }
    #resultados a:link {color:inherit;}
    #resultados a:hover {color:gray;}

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
        #INDEX {
	display: none;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

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
    <?php include '../header.php'; ?>
    <div class="container">
      <br/>
      <div class="row bb">
        <div class="span2">
        </div><!--/span-->
	<div class="span3">
	    <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li><a href="<?php echo $further_host;?>/ayuda/">INDEX</a></li>
	      <li class="nav-header">Por Materia</li>
	      <?php
	      $query3 = mysql_query("SELECT * FROM lista_categorias");
	      $numrows=@mysql_num_rows($query3);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query3)) {
	      ?>
		<li class="nav-header"><?php echo $result['categoria']; ?></li>
		<?php
		$categoria2 = $result['id'];
		$user_cond3 = "categoria_id='$categoria2'";
		$query4 = mysql_query("SELECT * FROM lista_materias WHERE $user_cond3");
		$numrows=@mysql_num_rows($query4);
		if($numrows != 0) {
		while ($result2 = mysql_fetch_array($query4)) {
		?>
		<li><a value="<?php echo $result2['id']; ?>"><button class="btn btn-mini btn-primary" type="button" value="<?php echo $result2['id']; ?>" onclick="showUser(this.value)"><i class="icon-search icon-white"></i></button> <?php echo $result2['materia']; ?></a></li>
		<?php } } else {
		  echo "<li>No Hay</li>"; }?>
	      <?php } } else {
		echo "<div class=\"alert alert-info\">Es una lastima, hubo un problema. <b>:'(</b> </div>"; }?>
            </ul>
          </div><!--/.well -->
	</div>
        <div class="span4">
	  <div class="alert">
	    <button type="button" class="close" data-dismiss="alert">&times;</button>
	    <strong>&iexcl;Advertencia!</strong> La p&aacute;gina esta en desarrollo.
	  </div>
	  <div id="resultados">
	  </div>
        </div><!--/span-->
	<div class="span2">
	</div>
      </div><!--/row-->

      <!-- Footer-->
      </div><!--/.fluid-container-->
      <?php include '../footer.php'; ?>

    

   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
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
    xmlhttp.open("GET","change.php?mid="+str,true);
    xmlhttp.send();
    }
    </script>
    <?php
      if( !isset($_GET['mid']) ) {
        echo "<script type=\"text/javascript\">document.getElementById('INDEX').style.display = 'block';</script>";
      }
    ?>
  </body>
</html>