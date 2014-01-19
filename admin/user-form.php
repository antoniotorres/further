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
	  <a href="user-list.php" class="btn"><i class="icon-arrow-left"></i> Back</a>
      </p>
      <br/>
      <form method="get" action="user-form.php">
	<fieldset>
	  <legend>Detalles</legend>
	  <label>Matricula</label>
	  <input name="add_matricula" type="text" placeholder="&quot;A00000000&quot;" required>
	  <label>Nombre</label>
	  <input name="add_nombre" type="text" placeholder="&quot;Nombre&quot;" required>
	  <label>Apellido</label>
	  <input name="add_apellido" type="text" placeholder="Apellido" required>
	  <label>Password</label>
	  <input name="add_password" type="password" placeholder="Contrasena" required>
            <label>Email Alterno</label>
	  <input name="add_email" type="password" placeholder="Contrasena" required>
            <label>Asesor</label>
	  <select name="add_asesor">
            <option value="0" selected>No</option>
            <option value="1">Si</option>
          </select>
	  <br/>
	  <button name="ADD" value="ADD" type="submit" class="btn"><i class="icon-arrow-up"></i> Crear</button>
	</fieldset>
      </form>
    <?php }?>
    <?php
	if ($_GET['route']=='edit')
	{
        $user_cond = "id='$_GET[id]'";
        $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
        $numrows=@mysql_num_rows($query);
        
        if($numrows != 0) {
        while ($result = mysql_fetch_array($query)) {
        $asesor = $result['asesor'];
        } } else {
        $asesor = "No Disponible"; }
    ?>
    <div class="container">
      <h1>Add</h1>
      <p class="pull-right">
	  <a href="user-list.php" class="btn"><i class="icon-arrow-left"></i> Back</a>
      </p>
      <br/>
      <form method="get" action="user-form.php">
	<fieldset>
	  <legend>Detalles</legend>
            <label>Asesor</label>
	  <select name="edit_asesor">
            <option value="0" <?php if ($asesor==1){echo "selected";}?>>No</option>
            <option value="1" <?php if ($asesor==1){echo "selected";}?>>Si</option>
          </select>
          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	  <br/>
	  <button name="EDIT" value="EDIT" type="submit" class="btn"><i class="icon-pencil"></i> Editar</button>
	</fieldset>
      </form>
    <?php }?>
    <?php
	if ($_GET['route']=='delete')
	{
    ?>
    <div class="container">
      <form class="form-signin" method="get" action="user-form.php">
        <h2 class="form-signin-heading">Confrim Delete</h2>
	<p class="text-error">*El usuario sera borrada para siempre y no se podra recuperar.</p>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <button class="btn btn-large btn-primary" type="submit" name="DELETE" value="DELETE">DELETE</button>
	<button class="btn btn-large" type="submit" name="DELETE" value="CANCEL">CANCEL</button>
      </form>
    <?php }?>
    </div>
    <?php
      if ($_GET['ADD']=='ADD')
      {
        $encrypt_password = md5($_GET[add_password]);
        $email_itesm = $_GET[add_matricula]."@itesm.mx";
        
      $query = mysql_query("INSERT INTO web_users (matricula, password, nombre, apellido, email, email_itesm, confirmacion, asesor) VALUES ('$_GET[add_matricula]', '$encrypt_password', '$_GET[add_nombre]', '$_GET[add_apellido]', '$_GET[add_email]', '$email_itesm', '1', '$_GET[add_asesor]')") or die(mysql_error());;
     Redirect('user-list.php', false);
      }
    if ($_GET['EDIT']=='EDIT')
      {
        $user_cond = "asesor='$_GET[edit_asesor]'";
        $user_cond2 = "id='$_GET[id]'";
      $query = mysql_query("UPDATE web_users SET $user_cond WHERE $user_cond2");
     Redirect('user-list.php', false);
      }
      if ($_GET['DELETE']=='DELETE')
      {
        $user_cond = "id='$_GET[id]'";
      $query = mysql_query("DELETE FROM web_users WHERE $user_cond");
      Redirect('user-list.php', false);
      }
      if ($_GET['DELETE']=='CANCEL')
      {
      Redirect('user-list.php', false);
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