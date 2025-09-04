<?php
$country= array("India"=>"New Delhi", "Japan"=>"Tokyo", "France"=>"paris", "Russia"=>"Moscow", "Canada"=>"ottawa");
$search=array_search("Tokyo",$country);
if ($search!==false){
    echo "found in country:$search";
}
else {
        echo "not found:$country";
    }
?>