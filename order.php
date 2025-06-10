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
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize user input from the registration form
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $number = $_POST["number"];
    $item = $_POST["item"];
    $packs = $_POST["packs"];
    $address = $_POST["address"];

    // Use prepared statements to insert user data
    $stmt = $conn->prepare("INSERT INTO `food_order` (email, number, item, packs, address) VALUES (?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("sssss", $email, $number, $item, $packs, $address);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Order successful!";

        // Redirect to success page
        header("Location: ordersuccess.html.php");
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

        <a href="ordersuccess.html.php"></a>
    