<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://www.furthercsc.com/user/login.php");
}
  include("../database.php");
  include("gravator.php");
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
  function User_Matricula($mid)
  {
    $user_cond = "id='$mid'";
    $query = mysql_query("SELECT * FROM web_users WHERE $user_cond ORDER BY ID ASC");
    $numrows=@mysql_num_rows($query);
    
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    echo $result['matricula'];
    } } else {
    echo "Nadie"; }
  }
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
    <link href="http://www.furthercsc.com/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.furthercsc.com/css/styles.css" rel="stylesheet">
    <link href="http://www.furthercsc.com/css/jquery-ui-timepicker-addon.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <style type="text/css">
	      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 70px;
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
    .crear {
      padding-top: 5px;
      padding-left: 5px;
      padding-right: 5px;
      margin-bottom: 30px;
      width: 600px;
      color: inherit;
      border: .2em solid #eaeaea;
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
    </style>
    <link href="http://www.furthercsc.com/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.furthercsc.com/img/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.furthercsc.com/img/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.furthercsc.com/img/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://www.furthercsc.com/img/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://www.furthercsc.com/img/icons/favicon.ico">
  </head>

  <body>
    <?php include '../header.php'; ?>
    <div class="container">
      <div class="bb">
	  <h1>Mi Cuenta</h1>
	  <h3><?php echo $_SESSION['userlogin']; ?></h3>
	      <div class="tabbable tabs-left">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#tab1" data-toggle="tab">Perfil</a></li>
<?php
$matricula = $_SESSION['userlogin'];
$user_cond = "matricula='$matricula'";
$query = mysql_query("SELECT * FROM web_users WHERE $user_cond AND asesor='1'");
$numrows=@mysql_num_rows($query);
if($numrows != 0) {
while ($result = mysql_fetch_array($query)) {
?>
		  <li><a href="#tab2" data-toggle="tab">Asesor</a></li>
<?php }} ?>
		</ul>
		<div class="tab-content">
		    <div class="tab-pane active" id="tab1">
		      <?php
		      $matricula = $_SESSION['userlogin'];
		      $user_cond = "matricula='$matricula'";
		      $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
		      $numrows=@mysql_num_rows($query);
		      if($numrows != 0) {
		      while ($result = mysql_fetch_array($query)) {
			$uemail = $result['email'];
			$unombre = $result['nombre'];
			$uapellido = $result['apellido'];
			$uemail_itesm = $result['email_itesm'];
		      }}
		      ?>
		      <p><img src="<?php echo get_gravatar($uemail);?>"></p>
		      <br/>
		      <p><b>Nombre:</b> <?php echo $unombre;?></p>
		      <p><b>Apellido:</b> <?php echo $uapellido;?></p>
		      <p><b>Email Alterno:</b> <?php echo $uemail;?></p>
		      <p><b>Email ITESM:</b> <?php echo $uemail_itesm;?></p>
		    </div>
<?php
$matricula = $_SESSION['userlogin'];
$user_cond = "matricula='$matricula'";
$query = mysql_query("SELECT * FROM web_users WHERE $user_cond AND asesor='1'");
$numrows=@mysql_num_rows($query);
if($numrows != 0) {
while ($result = mysql_fetch_array($query)) {
?>
		    <div class="tab-pane" id="tab2">
		    <p>Esta secci&oacute;n es para Asesores solamente!</p>
		    <p><b>Citas Actuales</b></p>
		    <table class="table table-bordered">
		      <tr style="background-color: #eaeaea;">
			<th>Materia</th>
			<th>Fecha</th>
			<th>Lugar</th>
			<th>?Ocupada?</th>
			<th>Usuario</th>
			<th>Action</th>
	    
		      </tr>
		      <?php
		      
		      $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
		      $numrows=@mysql_num_rows($query);
		      if($numrows != 0) {
		      while ($result = mysql_fetch_array($query)) {
		      $user_id = $result['id'];
		      }}
		      $user_cond2 = "tutor='$user_id'";
		      $query = mysql_query("SELECT * FROM asesoriasv0_1 WHERE $user_cond2 ORDER BY ID ASC");
		      $numrows=@mysql_num_rows($query);
		      if($numrows != 0) {
		      while ($result = mysql_fetch_array($query)) {
		      ?>
		    
		      <tr>
			<td><?php Materia_Name($result['materia_id']); ?></td>
			<td><?php echo $result['fecha']; ?></td>
			<td><?php echo $result['lugar']; ?></td>
			<td><?php if ($result['ocupada'] == '0') { ?><i class="icon-remove"></i><?php } ?> <?php if ($result['ocupada'] == '1') { ?><i class="icon-ok"></i><?php } ?></td>
			<td><?php User_Matricula($result['user']); ?></td>
			<td>
			    <a class="btn btn-primary" href="asesor-upt.php?route=DELETE&id=<?php echo $result['id']; ?>"><i class="icon-trash icon-white"></i> Delete</a>
			</td>
		      </tr>
			  <?php } } else { ?>
			  <tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		      </tr>
			    <?php }?>
		    </table>
		    <hr>
		      <p><b>Crear Citas</b></p>
		      <div class="crear">
		        <form class="form-inline"  action="asesor-upt.php" method="GET">
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
			  <input name="add_datetime" type="text" id="datepicker" class="input-medium required disable" placeholder="Fecha">
			  <input name="add_datetime1" type="hidden" id="datepicker1">
			  <input name="add_lugar" type="text" class="input-small required" placeholder="Lugar">
			  <input name="route" type="hidden" value="ADD">
			  <button type="submit" class="btn">Crear</button>
			</form>
		      </div>
		    </div>
<?php }} ?>
		</div>
	      </div>
      </div>
    
      <!-- Footer -->
    </div> <!-- /container -->
      
      <?php include '../footer.php'; ?>

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
    <script src="http://www.furthercsc.com/js/bootstrap.js"></script>
    <script src="http://www.furthercsc.com/js/jquery-ui-timepicker-addon.js"></script>
    <script>
      $(function() {
      $('#datepicker').datetimepicker({
      stepMinute: 30,
      minDate: 0,
      maxDate: 10,
      altField: "#datepicker1",
	altFieldTimeOnly: false,
	altFormat: "yy-mm-dd",
      });
      });
    </script>
  </body>
</html>