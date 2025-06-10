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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the login form
    $Admin_ID = $_POST["Admin_ID"];
    $password = $_POST["password"];

    // Check user credentials (you would replace this with database checks)
    if ($Admin_ID === "Admin" && $password === "Admin") {
        // Set session variables
        $_SESSION["Admin_ID"] = $Admin_ID;

        // Redirect to login success page
        header("Location: adminpanal.php");
        exit();
    } else {
        // Redirect to login page with an error message
        header("Location: index.html.php?error=1");
        exit();
    }
}


// Close the connection
$conn->close();
?>
