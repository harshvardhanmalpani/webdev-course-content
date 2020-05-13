<table><?php
//error_reporting(0);
$conn= mysqli_connect("localhost","root","","sample") or die("Sorry the site is not working right now");
$statement=$conn->prepare("insert into `clients` (`name`,`associate`,`revenue`) values (?,?,?)");
$statement->bind_param("ssi",$name,$associate,$revenue);
$name="FCB";
    $associate="TP156";
    $revenue=1000;
    $statement->execute();
$name="BJIO";
    $associate="IO88";
    $revenue=5500;
    $statement->execute();
$name="Apple";
    $associate="TR57";
    $revenue=11500;
    $statement->execute();
mysqli_close($conn);
?>
    </table>