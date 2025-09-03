<?php
$x=[1,2,3,4,5,6];
for($i=count($x)-1;$i>=0;$i--)  {
    echo $x[$i]." "; 
} 
print_r(array_reverse($x));

?>