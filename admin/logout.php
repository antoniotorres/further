//Loging out of your account
// If this takes too long Refresh the page.
<?php
session_name("FurtherAdmin");
session_start();
session_destroy();
header("location:login.php");
?>