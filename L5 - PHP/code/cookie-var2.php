<?php
#print_r($_COOKIE);
echo $_COOKIE['pen'];
setcookie("pen","camlin",time()-3600,"/php/");
?>