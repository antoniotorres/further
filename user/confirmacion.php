<?php
include("../database.php");

$confauth=$_GET["confauth"];
$matricula=$_GET["userid"];
if ($confauth=="x3FF65hXD") {
    $query=mysql_query("UPDATE web_users SET confirmacion='1' where matricula='$matricula' ");
    header("location:http://www.furthercsc.com/user/login.php?conf=exitosa");
}
else {
    header("location:http://www.furthercsc.com/user/login.php");
}
?>
