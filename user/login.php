<?php
session_start();
if(session_is_registered(myusername)){
header("location:http://www.furthercsc.com/user/");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ingresar &middot; Grupo Estuidantil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://www.furthercsc.com/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
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
      .form-signup {
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
      .form-signup .form-signin-heading,
      .form-signup .checkbox {
        margin-bottom: 10px;
      }
      .form-signup input[type="text"],
      .form-signup input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="http://www.furthercsc.com/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">
	  <?php if($_GET["conf"]=="mandada") { ?>
          <div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4>Yeeeiii! Ya casi esta listo</h4>
	  Ahora solo tienes que confirmar tu identidad. Te hemos mandado un correo a <?php echo $_GET["temail"]; ?><br/><br/><br/><br/><br/><br/><br/><br/>
	  </div>
	  <?php } ?>
	  <?php if($_GET["conf"]=="exitosa") { ?>
          <div class="alert alert-block alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4>Ya puedes usar el sistema :)</h4>
	  Tu identidad ha sido verificada, ahora pudes crear citas y muchas otras cosas. :)<br/>
	  </div>
	  <?php } ?>
      <div class="span4 offset1">
	<form class="form-signup" id="form-signup" action="http://www.furthercsc.com/user/register.php" method="get" name="form1">
	  <h2 class="form-signin-heading">Crear Cuenta</h2>
	  <input name="regusername" type="text" class="input-block-level required" id="regusername" placeholder="Matricula A00000000"><p id="message"></p>
	  <input name="regname" type="text" class="input-block-level required" id="txtbox" placeholder="Nombre">
	  <input name="regapellido" type="text" class="input-block-level required" id="txtbox" placeholder="Apellido">
	  <input name="regpassword" type="password" class="input-block-level required password" id="regpassword" placeholder="Contra&ntilde;a"><p id="pwdmessage"></p>
	  <input name="regpassword2" type="password" class="input-block-level required password" id="regpassword2" placeholder="Repetir Contra&ntilde;a"><p id="pwdmessage2"></p>
	  <input name="regcorreo" type="email" class="input-block-level required" id="txtbox" placeholder="Correo pepito@example.com">
	  <p id="correoitesm"></p>
	  <label class="checkbox">
	    <input name="regterminos" type="checkbox" id="remember" value="1">Estoy de acuerdo con los T&eacute;rminos y Condiciones
	  </label>
	  <?php if($_GET["error"]=="terminos") { ?>
	  <div class="alert alert-error"><i class="icon-remove"></i> Es necesario estar de acurdo con los T&eacute;rminos y Condiciones</div>
	  <?php }elseif($_GET["error"]=="password") { ?>
	  <div class="alert alert-error"><i class="icon-remove"></i> Contrase&ntilde;a no conciden.</div>
	  <?php }elseif($_GET["error"]=="matricula") { ?>
	  <div class="alert alert-error"><i class="icon-remove"></i> Matricula ya existe en el sistema.</div>
	  <?php }elseif($_GET["error"]=="ematricula") { ?>
	  <div class="alert alert-error"><i class="icon-remove"></i> Error en a Matricula (Debe de ser A000000000</div>
	  <?php }?>
	  <button name="Submit" class="btn btn-large btn-primary required" type="submit" value="Login">Registrar</button>
	</form>
      </div>
      <div class="span4">
	<form class="form-signin" action="http://www.furthercsc.com/user/checklogin.php" method="post" name="form1">
	<?php if($_GET["login"]=="fail") { ?>
	  <div class="alert alert-block">
	    <button type="button" class="close" data-dismiss="alert">&times;</button>
	    <h4>Login Fail</h4>
	    Contrase&ntilde;a o Usuario Incorrecto
	  </div>
	<?php } ?>
	  <h2 class="form-signin-heading">Favor Ingresar</h2>
	  <input name="myusername" type="text" class="input-block-level required" id="txtbox" placeholder="Matricula A00000000">
	  <input name="mypassword" type="password" class="input-block-level required password" id="txtbox" placeholder="Password">
	  <label class="checkbox">
	    <input name="remember" type="checkbox" id="remember" value="1">Recordarme
	  </label>
	  <button name="Submit" class="btn btn-large btn-primary" type="submit" value="Login">Ingresar</button>
	</form>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://www.furthercsc.com/js/jquery.js"></script>
    <script src="http://www.furthercsc.com/js/bootstrap.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://www.furthercsc.com/js/jquery.validate.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://www.furthercsc.com/js/jquery-1.3.2.min.js"></script>
    <script>
    $(document).ready(function(){
    $("#logForm").validate();
    });
    </script>
    <script type="text/javascript">
 
      $(document).ready(function(){
	 $("#regusername").change(function(){
	      $("#message").html("<div class=\"alert\"><i class=\"icon-refresh\"></i> Checando</div>");
	  

	 var username=$("#regusername").val();

	   $.ajax({
		 type:"post",
		 url:"check.php",
		 data:"username="+username,
		     success:function(data){
			$("#correoitesm").html("<p><i class=\"icon-ok\"></i>Correo del Tec - para mandar confirmacion: "+username+"@itesm.mx</p>");
		     if(data==0){
			 $("#message").html("<div class=\"alert alert-success\"><i class=\"icon-ok\"></i> Usuario Disponible</div>");
		     }
		     else if(data==-1){
			 $("#message").html("<div class=\"alert alert-error\"><i class=\"icon-remove\"></i> No es una matricula.</div>");
		     }
		     else{
			 $("#message").html("<div class=\"alert alert-error\"><i class=\"icon-remove\"></i> Usuario No Disponible</div>");
		     }
		 }
	      });

	 });

      });
      $(document).ready(function(){
	$("#regpassword").change(function(){
	  $("#pwdmessage").html("<div class=\"alert\"><i class=\"icon-refresh\"></i> Checando</div>");
	  var password=$("#regpassword").val();
	   $.ajax({
		     success:function(){
		     if(password.length<5){
			 $("#pwdmessage").html("<div class=\"alert alert-error\"><i class=\"icon-remove\"></i> Contrase&ntilde;a require mas de 5 caracteres.</div>");
		     }
		     else if(password.length>15){
			 $("#pwdmessage").html("<div class=\"alert alert-error\"><i class=\"icon-remove\"></i> Contrase&ntilde;a no puede ser m&aacute;s de 15 caracteres.</div>");
		     }
		     else{
			 $("#pwdmessage").html("<div class=\"alert alert-success\"><i class=\"icon-ok\"></i> Password Aceptable</div>");
		     }
		 }
	      });

	 });

      });
      $(document).ready(function(){
	$("#regpassword2").change(function(){
	  $("#pwdmessage2").html("<div class=\"alert\"><i class=\"icon-refresh\"></i> Checando</div>");
	  var password=$("#regpassword").val();
	  var password2=$("#regpassword2").val();
	   $.ajax({
		     success:function(){
		     if(password==password2){
			$("#pwdmessage2").html("<div class=\"alert alert-success\"><i class=\"icon-ok\"></i> Contrase&ntilde;a conciden.</div>");
		     }
		     else{
			$("#pwdmessage2").html("<div class=\"alert alert-error\"><i class=\"icon-remove\"></i> Contrase&ntilde;a no conciden.</div>");
		     }
		 }
	      });

	 });

      });
    </script>
    
  </body>
</html>
