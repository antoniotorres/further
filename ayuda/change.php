<?php
    include("../database.php");
    $mid = ' '.$_GET['mid'].',';
    $user_cond = "INSTR(mid,'$mid')>0";
    $query2 = mysql_query("SELECT * FROM banco_videos WHERE aprobado = '1' AND $user_cond AND enable = '1'");
    $numrows=@mysql_num_rows($query2);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query2)) {
    ?>
    <a href="detalles.php?vid=<?php echo $result['id']; ?>"><div style="margin-bottom: 20px;" class="row-fluid thumbnail">
      <div class="span12">
        <h3><?php echo $result['titulo']; ?></h3>
        <p style="height: 100px;"><?php echo $result['info']; ?></p>
        <div class="span5"><b>Autor: </b><?php echo $result['autor']; ?></div>
        <div class="span4 offset2"><b>Fecha: </b><?php echo date("F j, Y", strtotime($result['fecha'])); ?></div>
      </div>
    </div></a>
    <?php } } else {
        echo "<div class=\"alert alert-info\">Es una lastima, no hay videos en esta categoria. <b>:'(</b> </div>";
    }?>