<?php
  include("../database.php");
  include_once("../settings.php");

session_name("FurtherUser");
session_start();
if(!isset($_SESSION['username'])){
header("location:$further_host/user/login.php");
}
	    function User_Matricula($mid)
	    {
	      $user_cond = "id='$mid'";
	      $query = mysql_query("SELECT * FROM web_users WHERE $user_cond ORDER BY ID ASC");
	      $numrows=@mysql_num_rows($query);
	      
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      echo $result['nombre'];
	      } } else {
	      echo "Nadie"; }
	    }
	    $fecha = date('Y-m-d', strtotime($fecha));
	    $materia = $_GET['materia'];
	    $user_cond = "materia_id='$materia'";
	    $user_cond2 = date("Y-m-d");
	    ?>
	    <?php
	      $query = mysql_query("SELECT * FROM asesoriasv0_1 WHERE $user_cond AND ocupada='0' AND fecha > '$user_cond2'  ORDER BY fecha ASC");
	      $numrows=@mysql_num_rows($query);
              ?>
                <h2>Resultados</h2>
	      <?php
	      if($numrows != 0) {
	      while ($result = mysql_fetch_array($query)) {
	      ?>
	      <div class="well well-small">
	      <p><b>Dia y Hora:</b> <?php echo date('D, d M Y h:i A', strtotime($result['fecha'])); ?>, <b>Tutor:</b> <?php echo User_Matricula($result['tutor']); ?>, <b>Lugar:</b> <?php echo $result['lugar']; ?>,
		<form method="get" action="setcita.php">
		  <input type="hidden" name="usr_matricula" value="<?php echo $_SESSION['username']; ?>" />
		  <input type="hidden" name="usr_citaid" value="<?php echo $result['id']; ?>" />
		  <?php
		  if(!isset($_SESSION['username'])){
	          ?>
		  <a class="btn" href="<?php echo $further_host; ?>/user/login.php">Hacer Cita</a>
	          <?php } else { ?>
		  <button class="btn" name="hacercita" value="hacercita" >Hacer Cita</button>
		  <?php } ?>
		</form>
	      </p>
	      </div>
	      <?php } } else { ?>
	          <div class="alert alert-info">
		  <p><b>Oohh-Oh!</b> No hay nada en esta categoria, pero si estas interesado manda un correo a contacto@furthercsc.com</p>
		  </div>
	      <?php }?>