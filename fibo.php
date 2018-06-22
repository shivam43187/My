<?php

$a=0;
$b=1;
print $a;
echo"<br />";
print $b;
echo"<br />";
for($i=1;$i<=8;$i++)
{
$c=$a+$b;
print $c;
$a=$b;
$b=$c;
echo"<br />";
}

?>