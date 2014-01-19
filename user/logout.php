//Loging out of your account
// If this takes too long Refresh the page.
<?php 
session_start();
session_destroy();
header("location:http://www.furthercsc.com/user/login.php");
?>