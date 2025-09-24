<!DOCTYPE html>
<html>
<head>
    <title>Simple Online Quiz</title>
</head>
<body>

<h2>Online Quiz</h2>

<form method="post" action="">
    <p>1. Which language is used for web development?</p>
    <input type="radio" name="q1" value="HTML"> HTML<br>
    <input type="radio" name="q1" value="Python"> Python<br>
    <input type="radio" name="q1" value="C++"> C++<br><br>

    <p>2. What does CSS stand for?</p>
    <input type="radio" name="q2" value="Cascading Style Sheets"> Cascading Style Sheets<br>
    <input type="radio" name="q2" value="Computer Style Sheets"> Computer Style Sheets<br>
    <input type="radio" name="q2" value="Creative Style System"> Creative Style System<br><br>

    <p>3. PHP files have extension:</p>
    <input type="radio" name="q3" value=".php"> .php<br>
    <input type="radio" name="q3" value=".html"> .html<br>
    <input type="radio" name="q3" value=".css"> .css<br><br>

    <input type="submit" name="submit" value="Submit Quiz">
</form>

<?php
if (isset($_POST['submit'])) {
    $score = 0;

    // Check answers
    if ($_POST['q1'] == "HTML") {
        $score++;
    }
    if ($_POST['q2'] == "Cascading Style Sheets") {
        $score++;
    }
    if ($_POST['q3'] == ".php") {
        $score++;
    }

    echo "<h3>Your Score: $score / 3</h3>";
}
?>

</body>
</html>
