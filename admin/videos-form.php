<?php
session_name("FurtherAdmin");
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
  include("database.php");
  $id = $_GET['id'];
  $user_cond = "id='$id'";
  function Redirect($url, $permanent = false)
  {
      if (headers_sent() === false)
      {
	  header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
      }
  
      exit();
  }
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
  function Materia_Lista()
  {
    $query = mysql_query("SELECT * FROM lista_materias ORDER BY ID ASC");
    $numrows=@mysql_num_rows($query);
    
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    echo '<option value="'.$result['id'].'">'.$result['materia'].'</option>' ;
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
          .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
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
	  <a href="videos-list.php" class="btn"><i class="icon-arrow-left"></i> Back</a>
      </p>
      <br/>
      <form method="get" action="videos-form.php">
	<fieldset>
	  <legend>Detalles</legend>
	  <label>Titulo</label>
	  <input name="add_titulo" type="text" placeholder="&quot;Matematicas&quot;" required>
	  <span class="help-block"><p class="text-info">Pon un nombre simple.</p></span>
	  <label>Autor</label>
	  <input name="add_autor" type="text" placeholder="&quot;Pepe Tono&quot;" required>
	  <span class="help-block"><p class="text-info">El nombre de quien creo el video.</p></span>
	  <label>Descripci&oacute;n</label>
	  <textarea name="add_info" class="input-xxlarge" rows="4" maxlength="255" placeholder="&quot;Hablamos de como funcionan las celulas. . . .&quot;" required></textarea>
	  <label>Link</label>
	  <input name="add_link" class="input-xxlarge" type="url" placeholder="&quot;http://www.youtube.com/embed/ASO_zypdnsQ?rel=0&quot;">
	  <span class="help-block"><p class="text-warning">*Advertencia: Tiene que ser el embed link de YouTube.</p></span>
	  <select name="add_mid">
	  <?php
	  $query = mysql_query("SELECT * FROM lista_materias ORDER BY ID ASC");
	  $numrows=@mysql_num_rows($query);
	  if($numrows != 0) {
	  while ($result = mysql_fetch_array($query)) {
	  ?>
	    <option value="<?php echo $result['id']; ?>"><?php echo $result['materia']; ?></option>
	  <?php } } else {
	  echo "No Disponible"; }?>
	  </select>
	  <label class="checkbox">
	    <input name="add_enable" type="checkbox"> Enable
	    <span class="label label-info">Cambia si se puede ver y usar el video.</span>
	  </label>
	  <label class="checkbox">
	    <input name="add_aprobado" type="checkbox"> Aprobado
	    <span class="label label-info">Si ya fue aprobado por un maestro.</span>
	  </label>
	  <br/>
	  <button name="ADD" value="ADD" type="submit" class="btn"><i class="icon-arrow-up"></i> Subir</button>
	</fieldset>
      </form>
    <?php }?>
    <?php
	if ($_GET['route']=='edit')
	{
    ?>
    <?php
      $query = mysql_query("SELECT * FROM banco_videos WHERE $user_cond");
      $numrows=@mysql_num_rows($query);
      if($numrows != 0) {
      while ($result = mysql_fetch_array($query)) {
    ?>
    <div class="container">
      <h1>Edit</h1>
      <p class="pull-right">
	  <a href="videos-list.php" class="btn"><i class="icon-arrow-left"></i> Back</a>
      </p>
      <br/>
      <form method="get" action="videos-form.php">
	<fieldset>
	  <legend>Detalles</legend>
	  <label>Titulo</label>
	  <input name="edit_titulo" type="text" placeholder="&quot;Matematicas&quot;"  value="<?php echo $result['titulo']; ?>" required>
	  <span class="help-block"><p class="text-info">Pon un nombre simple.</p></span>
	  <label>Autor</label>
	  <input name="edit_autor" type="text" placeholder="&quot;Pepe Tono&quot;" value="<?php echo $result['autor']; ?>" required>
	  <span class="help-block"><p class="text-info">El nombre de quien creo el video.</p></span>
	  <label>Descripci&oacute;n</label>
	  <textarea name="edit_info" class="input-xxlarge" rows="5" maxlength="255" placeholder="&quot;Hablamos de como funcionan las celulas. . . .&quot;" required><?php echo $result['info']; ?></textarea>
	  <label>Link</label>
	  <input name="edit_link" class="input-xxlarge" type="url" placeholder="&quot;http://www.youtube.com/embed/ASO_zypdnsQ?rel=0&quot;" value="<?php echo $result['link']; ?>">
	  <span class="help-block"><p class="text-warning">*Advertencia: Tiene que ser el embed link de YouTube.</p></span>
	  <p class="text-info">Materia Actual: <?php Materia_Name($result['mid']) ?> 
	  <select name="edit_mid">
	  <?php
	  Materia_Lista()
	  ?>
	  </select></p>
	  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
	  <label class="checkbox">
	    <input name="edit_enable" type="checkbox" <?php if ($result['enable'] == '1') { echo "checked";} ?>> Enable
	    <span class="label label-info">Cambia si se puede ver y usar el video.</span>
	  </label>
	  <label class="checkbox">
	    <input name="edit_aprobado" type="checkbox" <?php if ($result['aprobado'] == '1') { echo "checked";} ?>> Aprobado
	    <span class="label label-info">Si ya fue aprobado por un maestro.</span>
	  </label>
	  <br/>
	  <button name="EDIT" value="EDIT" class="btn"><i class="icon-pencil"></i> Editar</button>
	</fieldset>
      </form>
      <?php } } else {
      echo "No Disponible"; }?>
    <?php }?>
    <?php
	if ($_GET['route']=='delete')
	{
    ?>
    <div class="container">
      <form class="form-signin" method="get" action="videos-form.php">
        <h2 class="form-signin-heading">Confrim Delete</h2>
	<p class="text-error">*El video sera borrado para siempre y no se podra recuperar.</p>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <button class="btn btn-large btn-primary" type="submit" name="DELETE" value="DELETE">DELETE</button>
	<button class="btn btn-large" type="submit" name="DELETE" value="CANCEL">CANCEL</button>
      </form>

    <?php }?>
    <?php
      if ($_GET['ADD']=='ADD')
      {
	if ($_GET['add_enable']=='on') {
	  $add_enable = '1';
	} else {
	  $add_enable = '0';
	}
	if ($_GET['add_aprobado']=='on') {
	  $add_aprobado = '1';
	} else {
	  $add_aprobado = '0';
	}
	$add_mid = ' '.$_GET[add_mid].',';
	$query = mysql_query("INSERT INTO banco_videos (enable, aprobado, titulo, info, link, autor, mid) VALUES ('$add_enable','$add_aprobado','$_GET[add_titulo]','$_GET[add_info]','$_GET[add_link]','$_GET[add_autor]','$add_mid')");
	Redirect('videos-list.php', false);
      } else {
	echo "UNSUCCESSFUL";
      }
      ?>
      <?php
      if ($_GET['EDIT']=='EDIT')
      {
	if ($_GET['edit_enable']=='on') {
	  $edit_enable = '1';
	} else {
	  $edit_enable = '0';
	}
	if ($_GET['edit_aprobado']=='on') {
	  $edit_aprobado = '1';
	} else {
	  $edit_aprobado = '0';
	}
	$edit_mid = ' '.$_GET[edit_mid].',';
      $query = mysql_query("UPDATE banco_videos SET enable='$edit_enable', aprobado='$edit_aprobado', titulo='$_GET[edit_titulo]', info='$_GET[edit_info]', link='$_GET[edit_link]', autor='$_GET[edit_autor]', mid='$edit_mid' WHERE $user_cond");
      Redirect('videos-list.php', false);
      } else {
	echo "UNSUCCESSFUL";
      }
      ?>
    <?php
      if ($_GET['DELETE']=='DELETE')
      {
      $query = mysql_query("DELETE FROM banco_videos WHERE $user_cond");
      Redirect('videos-list.php', false);
      }
      ?>
    <?php
      if ($_GET['DELETE']=='CANCEL')
      {
      Redirect('videos-list.php', false);
    }?>
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