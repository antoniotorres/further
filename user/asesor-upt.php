<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://www.furthercsc.com/user/login.php");
}
include("../database.php");
if($_GET[route] == "ADD") {
    $matricula = $_SESSION['userlogin'];
    $user_cond = "matricula='$matricula'";
    $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    $user_id = $result['id'];
    } } else {
    $user_id = "Nadie"; }
    $fecha = $_GET[add_datetime1];
    //$fecha = date('Y-m-d G:i:s', strtotime($_GET[add_datetime]));
    $query = mysql_query("INSERT INTO asesoriasv0_1 (materia_id, fecha, lugar, tutor) VALUES ('$_GET[add_materia]', '$fecha', '$_GET[add_lugar]', '$user_id')") or die(mysql_error());
    header("location:http://www.furthercsc.com/user/");
}
elseif($_GET[route] == "DELETE") {
    $matricula = $_SESSION['userlogin'];
    $user_cond = "matricula='$matricula'";
    $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    $user_id = "tutor='$result[id]'";
    } } else {
    $user_id = "nadie"; }
    $user_cond2 = "id='$_GET[id]'";
    $query = mysql_query("DELETE FROM asesoriasv0_1 WHERE $user_id AND $user_cond2");
    header("location:http://www.furthercsc.com/user/");
}
else {
    header("location:http://www.furthercsc.com/user/");
}
?>