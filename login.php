<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Predefined values
    $valid_username = "admin";
    $valid_password = "12345";

    // User input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful!";
    } else {
        echo "Invalid credentials";
    }
} else {
    echo "Please submit the form first.";
}
?>
