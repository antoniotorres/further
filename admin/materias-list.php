<?php
session_name("FurtherAdmin");
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
  include("database.php");
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
      <h1>Lista de Materias y Categorias</h1>
      
      <div class="row">
	<div class="span8">
	  <p class="pull-right">
	      <a href="materias-form.php?route=add" class="btn" type="button"><i class="icon-plus"></i> Add</a>
	    </p>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>ID <i class="icon-chevron-down"></i></th>
		  <th>Materia <i class="icon-chevron-down"></i></th>
		  <th>Categoria ID <i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM lista_materias ORDER BY ID ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      
		<tr>
		  <td><?php echo $result['id']; ?></td>
		  <td><?php echo $result['materia']; ?></td>
		  <td><?php echo $result['categoria_id']; ?></td>
		  <td>
		    <div class="btn-group">
		      <a class="btn btn-primary" href="asesoria-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
		      <ul class="dropdown-menu">
			<li><a href="asesoria-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil"></i> Edit</a></li>
			<li><a href="asesoria-form.php?route=delete&id=<?php echo $result['id']; ?>"><i class="icon-trash"></i> Delete</a></li>
		      </ul>
		    </div>
		  </td>
		</tr>
		    <?php } } else {
		      echo "No Disponible"; }?>
	      </table>
	</div>
	<div class="span4">
	  <p class="pull-right">
	      <a href="materias-form.php?route=add" class="btn" type="button"><i class="icon-plus"></i> Add</a>
	    </p>
	      <table class="table table-bordered">
		<tr style="background-color: #eaeaea;">
		  <th>ID <i class="icon-chevron-down"></i></th>
		  <th>Categoria<i class="icon-chevron-down"></i></th>
		  <th></th>
		</tr>
	      <?php
	      $query = mysql_query("SELECT * FROM lista_categorias ORDER BY ID ASC");
	      $numrows=@mysql_num_rows($query);
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      
		<tr>
		  <td><?php echo $result['id']; ?></td>
		  <td><?php echo $result['categoria']; ?></td>
		  <td>
		    <div class="btn-group">
		      <a class="btn btn-primary" href="asesoria-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
		      <ul class="dropdown-menu">
			<li><a href="asesoria-form.php?route=edit&id=<?php echo $result['id']; ?>"><i class="icon-pencil"></i> Edit</a></li>
			<li><a href="asesoria-form.php?route=delete&id=<?php echo $result['id']; ?>"><i class="icon-trash"></i> Delete</a></li>
		      </ul>
		    </div>
		  </td>
		</tr>
		    <?php } } else {
		      echo "No Disponible"; }?>
	      </table>
	</div>
      </div>
	
      </div>
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