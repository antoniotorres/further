<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://www.furthercsc.com/user/login.php");
}
?>

<html>
<body>
Login Successful
<?php
echo $_SESSION['userlogin'];
echo $_SESSION['userid'];
?>
</body>
</html>