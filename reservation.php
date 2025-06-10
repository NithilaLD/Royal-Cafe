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
    // Get user input from the reservation form
    $combo = $_POST["combo"];
    $packs = $_POST["packs"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Use prepared statements to insert user data
    $stmt = $conn->prepare("INSERT INTO reservation (combo, packs, date, time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $combo, $packs, $date, $time);

    if ($stmt->execute()) {
        echo "Reservation successful!";
        
        // Redirect to success page
        header("Location: reservationsuccess.html.php");
        exit(); // Make sure to exit after the header to prevent further execution

    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
