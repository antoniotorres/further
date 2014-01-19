<?php
session_name("FurtherAdmin");
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
  include("database.php");
function Redirect($url, $permanent = false)
  {
      if (headers_sent() === false)
      {
	  header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
      }
  
      exit();
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
    <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
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
    body {
	  padding-top: 50px;
    }
  </style>
  <body>
    <?php include 'header.php'; ?>
    <?php
	if ($_GET['route']=='add')
	{
    ?>
    <div class="container">
      <h1>Add</h1>
      <p class="pull-right">
	  <a href="asesoria-list.php" class="btn"><i class="icon-arrow-left"></i> Back</a>
      </p>
      <br/>
      <form method="get" action="asesoria-form.php">
	<fieldset>
	  <legend>Detalles</legend>
	  <label>Tutor</label>
	    <select name="add_tutor">
			<option value="sm" selected>Selecciona Tutor</option>
			<?php
                                      $query = mysql_query("SELECT * FROM web_users");
                                      $numrows=@mysql_num_rows($query);
                                      if($numrows != 0) {
                                      while ($result = mysql_fetch_array($query)) {
                                      ?>
				      <option value="<?php echo $result['id']; ?>"><?php echo $result['matricula']; ?> - <?php echo $result['nombre']; ?></option>
                                      <?php } } else {
                                        echo "<div class=\"alert alert-info\">Es una lastima, hubo un problema. <b>:'(</b> </div>"; }?>
			
	  </select>
	  <label>Lugar</label>
	  <input name="add_lugar" type="text" placeholder="&quot;Bibloteca&quot;" required>
	  <label>Fecha</label>
	  <input name="add_fecha" type="text" placeholder="2013-08-25 14:30:00" required>
	  <label>Materia</label>
	  <select name="add_materia">
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
	  <br/>
	  <button name="ADD" value="ADD" type="submit" class="btn"><i class="icon-arrow-up"></i> Subir</button>
	</fieldset>
      </form>
    <?php }?>
    <?php
	if ($_GET['route']=='delete')
	{
    ?>
    <div class="container">
      <form class="form-signin" method="get" action="asesoria-form.php">
        <h2 class="form-signin-heading">Confrim Delete</h2>
	<p class="text-error">*La asesoria sera borrada para siempre y no se podra recuperar.</p>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <button class="btn btn-large btn-primary" type="submit" name="DELETE" value="DELETE">DELETE</button>
	<button class="btn btn-large" type="submit" name="DELETE" value="CANCEL">CANCEL</button>
      </form>
    <?php }?>
    </div>
    <?php
      if ($_GET['ADD']=='ADD')
      {
      $query = mysql_query("INSERT INTO asesoriasv0_1 (materia_id, fecha, lugar, tutor) VALUES ('$_GET[add_materia]', '$_GET[add_fecha]', '$_GET[add_lugar]', '$_GET[add_tutor]')");
      Redirect('asesoria-list.php', false);
      }
    
      if ($_GET['DELETE']=='DELETE')
      {
      $user_cond = "id='$_GET[id]'";
      $query = mysql_query("DELETE FROM asesoriasv0_1 WHERE $user_cond");
      Redirect('asesoria-list.php', false);
      }
      if ($_GET['DELETE']=='CANCEL')
      {
      Redirect('asesoria-list.php', false);
    }?>
      <!-- Footer-->
      <?php include 'footer.php'; ?>

     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript">
            $('.timepicker1').timepicker();
        </script>
  </body>
</html>