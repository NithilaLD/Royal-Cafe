<?php
// Database connection details
$host = "sql211.infinityfree.com"; // Your database host
$username = "if0_35454951"; // Your database username
$password = "XZhhhuuh1EHE"; // Your database password
$database = "if0_35454951_royalcafe"; // Your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the registration form
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $raw_password = $_POST["password"];

    // Hash the password using PHP's password_hash
    $password = password_hash($raw_password, PASSWORD_BCRYPT);

    // Use prepared statements to insert user data
    $stmt = $conn->prepare("INSERT INTO customer (name, number, email, password) VALUES (?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssss", $name, $number, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";

        // Redirect to success page
        header("Location: loginsuccess.html.php");
        exit(); // Make sure to exit after the header to prevent further execution

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
