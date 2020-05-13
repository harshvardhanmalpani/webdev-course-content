<?php
session_start();
$_SESSION['state']="USER logged in";
$_SESSION['c']=1;
print_r($_SESSION);
#unset($_SESSION['c']);
session_unset();
session_destroy();
?>