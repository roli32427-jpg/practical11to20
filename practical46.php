<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form action="thankyou.php" method="get">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
</body>
</html>
