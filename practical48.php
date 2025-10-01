<?php
if (isset($_POST['name'])) {
    setcookie("name", $_POST['name'], time() + 86400);
}
if (isset($_COOKIE['name'])) {
    echo "Welcome back, " . $_COOKIE['name'] . "!";
} 
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
    Enter your name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
</body>
</html>
