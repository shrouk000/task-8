<?php
// //session_start();
// unset($_SESSION['user_email']);
// unset($_SESSION['pw']);
// session_destroy();

$expir_date= time ()-(86400*30);
setcookie('user_data',$_COOKIE['user_data'],$expir_date,'/');
echo"You logged out";
header("refresh:6;URL=./session8.php");
?>