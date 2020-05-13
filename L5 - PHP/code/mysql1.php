<?php
//error_reporting(0);
$conn= mysqli_connect("localhost","root","","sample") or die("Sorry the site is not working right now");

$result=mysqli_query($conn,"update `emp` set `address`='Mumbai' where `id`=9");
$output=mysqli_affected_rows($conn);
#$id=mysqli_insert_id($conn);
print_r($output);
#print_r($id);
mysqli_close($conn);
?>