<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display a notification message
    echo "Subscription successful! You are now subscribed to notifications.";
} else {
    // Redirect users who access this page directly
    header("Location: index.html");
    exit();
}
?>