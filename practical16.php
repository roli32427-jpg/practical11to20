<?php
echo("print the number from 1 to 20 using for loop: ");
for($i=1;$i<=20;$i++){
 echo $i;
 echo" ";
}
echo"<br>";
echo("print the number from 1 to 20 using while loop: ");
$i = 1;
while ($i <= 20){
     echo $i;
     echo" ";
     $i++;
}
echo"<br>";
echo("print the number from 1 to 20 using dowhile loop: ");
$i=1;
do{
    echo $i;
    echo" ";
    $i++;
}
   while ($i <= 20); 
?>