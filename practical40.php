<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>

<form method="post" action="practical40.php">
    Enter your name: 
    <input type="text" name="username" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    echo "<h2>Welcome, " . htmlspecialchars($name) . "!</h2>";
}
?>

</body>
</html>
