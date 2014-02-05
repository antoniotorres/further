<?php
session_name("FurtherAdmin");
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
}
  include("database.php");
  function Materia_Name($mid)
  {
    $user_cond = "id='$mid'";
    $query = mysql_query("SELECT * FROM lista_materias WHERE $user_cond ORDER BY ID ASC");
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
    <title>Further -Admin</title>
    <meta name="description" content="Further CSC, tiene el proposito de ayudar al estudiante a traves de videos y asesorias.">
    <meta name="author" content="Jose Antonio Torres">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">

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
	<style type="text/css">
	      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
	  padding-top: 50px;
    }
	</style>
  <body>
    <?php include 'header.php'; ?>
    <div class="container">
      <h1>Lista de Videos</h1>
      <p class="pull-right">
	<a href="videos-form.php?route=add" class="btn" type="button"><i class="icon-plus"></i> Add</a>
      </p>
	<table class="table table-bordered">
	  <tr style="background-color: #eaeaea;">
	    <th>ID</th>
	    <th>Enable</th>
	    <th>Aprobado</th>
	    <th>Titulo</th>
	    <th>Autor</th>
	    <th>Materia</th>
	    <th>Fecha</th>
	    <th>Action</th>

	  </tr>
	<?php
	$query = mysql_query("SELECT * FROM banco_videos ORDER BY ID ASC");
	$numrows=@mysql_num_rows($query);
	if($numrows != 0) {
	while ($result = mysql_fetch_array($query)) {
	?>
	
	  <tr>
	    <td><?php echo $result['id']; ?></td>
	    <td><?php if ($result['enable'] == '0') { ?><i class="icon-remove"></i><?php } ?> <?php if ($result['enable'] == '1') { ?><i class="icon-ok"></i><?php } ?></td>
	    <td><?php if ($result['aprobado'] == '0') { ?><i class="icon-remove"></i><?php } ?> <?php if ($result['aprobado'] == '1') { ?><i class="icon-ok"></i><?php } ?></td>
	    <td><?php echo $result['titulo']; ?></td>
	    <td><?php echo $result['autor']; ?></td>
	    <td><p>
	    <?php
	    echo $result['mid'];
	    ?></p>
	    </td>
	    <td><?php echo date("F j, Y, g:i a", strtotime($result['fecha'])); ?></td>
	    <td>
	      <div class="btn-group">
		<a class="btn btn-primary" href="videos-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="videos-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil"></i> Edit</a></li>
		  <li><a href="videos-form.php?route=delete&id=<?php echo $result['id']; ?>"><i class="icon-trash"></i> Delete</a></li>
		</ul>
	      </div>
	    </td>
	  </tr>
	      <?php } } else {
		echo "No Disponible"; }?>
	</table>
      <hr>
      <!-- Footer-->
      <?php include 'footer.php'; ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>