<?php

$a="pankaj";
$b=23;
$c=$a." ".$b;
print $c;
$arr=array("pankaj","jain");
$name="";
foreach($arr as $data)
{
$name=$name." 4 ".$data;
}
echo"<br/>";
print $name;
echo"<br/>";
$name1=explode(" 4 ",$name);
print $name1[1];
print "  ";
print $name1[2];

?>
