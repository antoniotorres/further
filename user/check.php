<?php
include("../database.php");

$username=$_POST["username"];

if(strlen($_POST["username"]) >=10){
    echo -1;
}
else if(strlen($_POST["username"]) <=8){
    echo -1;
}
else {
$query=mysql_query("SELECT * from web_users where matricula='$username' ");
 
$find=mysql_num_rows($query);
 
echo $find;
}
?>