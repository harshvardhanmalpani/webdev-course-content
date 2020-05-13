<?php
session_start();
if(isset($_SESSION['c']))
{
if($_SESSION['c']==1)
    echo "Welcome Back";
}
else echo "Hello there!";
?>