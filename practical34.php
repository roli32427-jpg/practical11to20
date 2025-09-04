<?php
    $Fruits =array("Apple"=>40,"banana"=>50,"orange"=>20);
    $a=$Fruits;
    asort($Fruits);
    print_r($Fruits);
    echo"<br>";
    $b=$Fruits;
    ksort($Fruits);
    print_r($Fruits);
?>