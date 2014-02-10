<?php
  include("../database.php");
  include("gravator.php");
  include_once("../settings.php");
  
$host="localhost"; // Host name 
$username="username"; // Mysql username 
$password="password"; // Mysql password 
$db_name="database"; // Database name 
$tbl_name="web_users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$encypt_password=md5($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$encypt_password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//Start your session
session_name("FurtherUser");
session_start();
//Store the name in the session
$_SESSION['username'] = $myusername;
$_SESSION['userid'] = $result['id'];
header("location:$further_host/user/");
}
else {
    echo "Wrong Username or Password";
    header("location:$further_host/user/login.php?login=fail");
}
?>