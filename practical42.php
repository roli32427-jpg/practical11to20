<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Calculator</h2>
<form method="POST" action="">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number: <input type="number" name="num2" required><br><br>

    Select Operation: 
    <select name="operation" required>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];

    switch ($op) {
        case "add":
            $result = $num1 + $num2;
            echo "<h3>Result: $result</h3>";
            break;
        case "sub":
            $result = $num1 - $num2;
            echo "<h3>Result: $result</h3>";
            break;
        case "mul":
            $result = $num1 * $num2;
            echo "<h3>Result: $result</h3>";
            break;
        case "div":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<h3>Result: $result</h3>";
            } else {
                echo "<h3>Error: Division by zero not allowed!</h3>";
            }
            break;
        default:
            echo "<h3>Please select a valid operation.</h3>";
    }
}
?>

</body>
</html>
