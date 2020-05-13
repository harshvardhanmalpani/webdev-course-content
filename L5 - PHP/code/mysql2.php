<table><?php
//error_reporting(0);
$conn= mysqli_connect("localhost","root","","sample") or die("Sorry the site is not working right now");
$query =mysqli_query($conn,"select * from `emp`");
  $result=mysqli_fetch_assoc($query);
 $head=array_keys($result);
    echo "<tr class=heading>";
    foreach($head as $heading)
    {
        echo "<th>$heading</th>";
    }
    echo "</tr><tr class=firstrow>";
    foreach($result as $firstrow)
    {
        echo "<td>$firstrow</td>";
    }
    echo "</tr>";
while($result=mysqli_fetch_row($query))
{
     echo "<tr>";
    foreach($result as $firstrow)
    {
        echo "<td>$firstrow</td>";
    }
    echo "</tr>";
}
mysqli_close($conn);
?>
    </table>