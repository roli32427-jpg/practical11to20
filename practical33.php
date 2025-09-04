<?php
     $Student=array("Ragini" => 45,"Roli" => 44,"Roshni" => 40,);
    if(array_key_exists("Ragini",$Student))
    {
        echo "key exists!";
    }
    else{
        echo "key does not exists!";
    }
?>