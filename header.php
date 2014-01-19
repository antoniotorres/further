<?php include_once("analyticstracking.php") ?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="http://www.furthercsc.com">Further</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li><a href="http://www.furthercsc.com">Home</a></li>
            <li><a href="http://www.furthercsc.com/asesorias/">Asesorias</a></li>
            <li><a href="http://www.furthercsc.com/ayuda/">Tutoriales</a></li>
          </ul>
          <?php
          session_start();
            if(session_is_registered(myusername)){
            ?>
            <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['userlogin']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <!-- <li class="divider"></li> -->
                    <li><a href="http://www.furthercsc.com/user/logout.php" class="navbar-link">Logout</a></li>                   
                  </ul>
                </li>
            </ul>
            <?php } else {?>
            <ul class="nav pull-right">
          <li><a href="http://www.furthercsc.com/user/login.php">Sign Up</a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
              <form action="http://www.furthercsc.com/user/checklogin.php" method="post" accept-charset="UTF-8">
                <input id="user_username" style="margin-bottom: 15px;" type="text" name="myusername" size="30" placeholder="Matricula"/>
                <input id="user_password" style="margin-bottom: 15px;" type="password" name="mypassword" size="30" placeholder="Contrase&ntilde;a"/>
               
                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
              </form>
            </div>
          </li>
        </ul>
            <?php } ?>
          <!--<form class="navbar-form pull-right">
            <input class="span2" type="text" placeholder="Matricula">
            <input class="span2" type="password" placeholder="Contraseña">
            <button type="submit" class="btn">Sign in</button>
          </form>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>