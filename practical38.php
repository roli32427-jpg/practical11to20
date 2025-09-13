<!DOCTYPE html>
<html>
<head>
    <title>Sum Calculator</title>
</head>
<body>
    <h2>Do Numbers ka Yog (Sum)</h2>
    <form action="sum.php" method="get">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Sum Dekho">
    </form>
</body>
</html>
<?php
// Check kar lo numbers set hain ya nahi
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $sum = $num1 + $num2;

    echo "<h2>Do Numbers ka Yog (Sum)</h2>";
    echo "Number 1: $num1 <br>";
    echo "Number 2: $num2 <br>";
    echo "Yog (Sum): $sum <br>";
    echo "Meaning in Hienglish: $num1 aur $num2 ka yog hai $sum";
} else {
    echo "Numbers form se submit karein ya URL me bhejein.";
}
?>
