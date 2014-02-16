<?php
  include("../database.php");
  include("gravator.php");
  include_once("../settings.php");

session_name("FurtherUser");
session_start();
if(!isset($_SESSION['username'])){
header("location:$further_host/user/login.php");
}
if($_GET[route] == "ADD") {
    $matricula = $_SESSION['username'];
    $user_cond = "email='$matricula'";
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
    header("location:$further_host/user/");
}
elseif($_GET[route] == "DELETE") {
    $matricula = $_SESSION['username'];
    $user_cond = "email='$matricula'";
    $query = mysql_query("SELECT * FROM web_users WHERE $user_cond");
    $numrows=@mysql_num_rows($query);
    if($numrows != 0) {
    while ($result = mysql_fetch_array($query)) {
    $user_id = "tutor='$result[id]'";
    } } else {
    $user_id = "nadie"; }
    $user_cond2 = "id='$_GET[id]'";
    $query = mysql_query("DELETE FROM asesoriasv0_1 WHERE $user_id AND $user_cond2");
    header("location:$further_host/user/");
}
else {
    header("location:$further_host/user/");
}
?>