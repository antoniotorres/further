<?php
  include("../database.php");
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
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=516320045117659";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php include '../header.php'; ?>
    <div class="container">
      <br/>
      <div class="row">
        <div class="span2">
        </div><!--/span-->
	<div class="span8">
	<div class="bb">
	<p>
	  <a href="http://www.furthercsc.com/ayuda" class="btn"><i class="icon-arrow-left"></i> Back</a>
	</p>
	<?php
	$vid = $_GET['vid'];
	$user_cond = "id=$vid";
	$query2 = mysql_query("SELECT * FROM banco_videos WHERE aprobado = '1' AND $user_cond AND enable = '1'");
	$numrows=@mysql_num_rows($query2);
	if($numrows != 0) {
	while ($result = mysql_fetch_array($query2)) {
	?>
	<iframe width="100%" height="440" src="//www.youtube.com/embed/<?php echo $result['link']; ?>" frameborder="0" allowfullscreen></iframe>
	<h3><?php echo $result['titulo']; ?></h3>
	<p style="height: 100px;"><?php echo $result['info']; ?></p>
	<p><b>Autor: </b><?php echo $result['autor']; ?></p>
	<p><b>Fecha: </b><?php echo date("F j, Y", strtotime($result['fecha'])); ?></p>
	<?php }} ?>
	<hr/>
	<h2>Comentarios</h2>
	
	<div class="fb-comments" data-href="<?php echo('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>" data-width="750"></div>
	</div><!--/span-->
      </div>
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
  </body>
</html>