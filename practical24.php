<?php
   $number=array(10,20,30,40,50);
$sum=0;
for($i=0;$i<count($number);$i++){
    $sum+=$number[$i];
}
   echo "number: ";
   print_r( $number);
   echo"<br>total sum = ".$sum;
?>