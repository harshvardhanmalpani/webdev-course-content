<a href='https://google.com'>Visit here</a>
<?php 
$input='<a href="https://google.com">Visit here & here</a> ';
#echo htmlentities($input);
$output="&lt;a href='https://google.com'&gt;Visit here&lt;/a&gt;";
#echo html_entity_decode($output);
#echo htmlspecialchars($input,ENT_QUOTES);
//ENT_NOQUOTES
echo htmlspecialchars_decode("&lt;a href='https://google.com'&gt;Visit here&lt;/a&gt;");
?>