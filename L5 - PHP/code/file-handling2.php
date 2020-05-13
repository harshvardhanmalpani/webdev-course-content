<?php
$d=disk_free_space("/");
$i=$d/(1024*1024*1024);

echo number_format($i,2).'GB<br>';
echo disk_total_space("/");
exit;
#$a=file_get_contents("https://google.com");
#echo $a;
#file_put_contents("b.txt","good morning",FILE_APPEND);
#=file("practice/a.txt");
#print_r($ar);
#echo strlen($ar[4]);
#foreach($ar as $r)
#    echo trim($r)." ";
$o=fopen("practice/a.txt",'a+');
/*fgetc($o);
fgetc($o);
echo "pointer is at ".ftell($o).'<br>';
echo fgets($o);
echo fgets($o);
echo "pointer is at ".ftell($o).'<br>';
fseek($o,6);
echo fgets($o);
echo "pointer is at ".ftell($o).'<br>';*/
fwrite($o,"hello world
");
fwrite($o,"hello world
");
fseek($o,0);echo fgets($o);
fclose($o);
?>
