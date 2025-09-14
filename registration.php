<?php
// Retrieve values using POST
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validation: Check if any field is empty
if (empty($username) || empty($email) || empty($password)) {
    echo "❌ Error: All fields are required!";
} else {
    // Display user registration details
    echo "<h2>Registration Successful!</h2>";
    echo "✅ Username: " . htmlspecialchars($username) . "<br>";
    echo "✅ Email: " . htmlspecialchars($email) . "<br>";
    echo "✅ Password: " . htmlspecialchars($password) . "<br>"; 
}
?>
