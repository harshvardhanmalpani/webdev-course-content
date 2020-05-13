<?php
$a=-5;
$b=0;
$c=6;
/*AND operator, 0 0 = 0
0 and 1 = 0
1 and 0= 0
1 1 = 1 */
/* OR operator 0 0 = 0
0 or 1 = 1
1 or 0 = 1
1 or 1 = 1 */
/*xor operator
0 0 = 0
0 1 = 1
1 0 = 1
1 1 = 0
*/
var_dump($a<$b);
var_dump($b<$c);
echo "<br>Result:</br>";
var_dump(!($a<$b) or($b<$c));
// !(true) or (true)
// false or true = true
?>