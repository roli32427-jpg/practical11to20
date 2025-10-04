<?php
if(isset($_COOKIE['discount'])){
    setcookie("discount","true",time()+600);
}
if(isset($_COOKIE['discount'])){
    echo "Welcome!You get 10% off (valid for 10 minutes).";
}
else{
    echo "sorry, the offer has expired.";
}
?>