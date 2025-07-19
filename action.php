<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $message = htmlspecialchars(trim($_POST["message"]));

        // Optional: Validate required fields
        if (empty($name) || empty($email) || empty($message)) {
            echo "Please fill in all fields.";
        } else {
            // You can save to a file, send email, or just display the data
            echo "<h2>Form Submitted Successfully!</h2>";
            echo "<strong>Name:</strong> $name <br>";
            echo "<strong>Email:</strong> $email <br>";
            echo "<strong>Message:</strong> $message <br>";
        }
    } else {
         echo "Invalid Request.";
    }
?>