<?php 


$arr=array(1,23,12,4,56,39,100,23);
$count=count($arr);
print "the no of elements in array are:";
print $count;
echo"<br/>";
rsort($arr);
print "The ascending/desending order of array is:";
echo"<br/>";
foreach($arr as $data)
{
print $data;
echo"<br/>";
}
?>