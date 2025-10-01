<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
} else {
    $count = 1;
}
setcookie("visits", $count, time() + 86400);

if ($count == 1) {
    echo "This is your first visit!";
} else {
    echo "You have visited $count times.";
}
?>
