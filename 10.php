<?php

function fact($a)
{
  if($a==1)
       return(1);
 else
       return($a*fact($a-1));
}
print "the factorial of the given number is:"
print fact(5);


?>