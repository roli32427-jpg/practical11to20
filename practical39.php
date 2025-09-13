<!DOCTYPE html>
<html>
<head>
    <title>Result Form</title>
</head>
<body>
    <h2>Enter Your Marks</h2>
    <form action="practical39.php" method="get">
        Marks: <input type="number" name="marks">
        <input type="submit" value="Check Result">
    </form>
</body>
</html>
<?php
if (isset($_GET['marks'])) {
    $marks = (int) $_GET['marks'];

    if ($marks >= 40) {
        echo "PASS";
    } else {
        echo "FAIL";
    }
} else {
    echo "Please enter marks in the form.";
}
?>
