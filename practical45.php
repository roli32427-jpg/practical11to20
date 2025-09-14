<?php
$score = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Correct answers
    $answers = [
        'q1' => 'B', // Question 1 correct option
        'q2' => 'A', // Question 2 correct option
        'q3' => 'C', // Question 3 correct option
    ];

    $score = 0;
    foreach ($answers as $q => $correct) {
        if (isset($_POST[$q]) && $_POST[$q] === $correct) {
            $score++;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Online Quiz (POST)</title>
  <style>
    body { font-family: Arial, sans-serif; max-width: 720px; margin: 30px auto; padding: 0 16px; }
    .question { margin-bottom: 18px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; }
    .submit { margin-top: 12px; }
    .result { background:#f0f8ff; padding:12px; border-radius:6px; margin-bottom:12px; }
  </style>
</head>
<body>
  <h1>Online Quiz (3 Questions)</h1>

  <?php if ($score !== null): ?>
    <div class="result">
      <strong>Your score:</strong> <?= htmlspecialchars($score) ?> / 3
    </div>
  <?php endif; ?>

  <form method="post" action="">
    <div class="question">
      <p><strong>1. Which language is primarily used for web server scripting?</strong></p>
      <label><input type="radio" name="q1" value="A"> A Java</label><br>
      <label><input type="radio" name="q1" value="B"> B PHP</label><br>
      <label><input type="radio" name="q1" value="C"> C C++</label><br>
    </div>

    <div class="question">
      <p><strong>2. What does HTML stand for?</strong></p>
      <label><input type="radio" name="q2" value="A"> A HyperText Markup Language</label><br>
      <label><input type="radio" name="q2" value="B"> B HighText Machine Language</label><br>
      <label><input type="radio" name="q2" value="C"> C Hyperlinking Text Mark Language</label><br>
    </div>

    <div class="question">
      <p><strong>3. Which symbol is used to start a PHP code block?</strong></p>
      <label><input type="radio" name="q3" value="A"> A &lt;script&gt; </label><br>
      <label><input type="radio" name="q3" value="B"> B &lt;?= </label><br>
      <label><input type="radio" name="q3" value="C"> C &lt;?php </label><br>
    </div>

    <button type="submit" class="submit">Submit Answers</button>
  </form>
</body>
</html>
