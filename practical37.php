<!DOCTYPE html>
<html>
<body>
<form method="GET" action="">
  Enter your name: <input type="text" name="name">
  Enter your age: <input type="number" name="age">
  <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'].",you are" .$_GET['age']. "year old";
}
?>
</body>
</html>
