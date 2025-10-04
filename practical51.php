<?php
if (!isset($_COOKIE['discount'])) {
    setcookie("discount", "true", time() + 600); // 10 min ke liye valid
    echo "Welcome! You get 10% off (valid for 10 minutes). Refresh the page!";
} 
elseif (isset($_COOKIE['discount'])) {
    echo "Welcome! You get 10% off (valid for 10 minutes).";
} 
else {
    echo "Sorry, the offer has expired.";
}
?>
