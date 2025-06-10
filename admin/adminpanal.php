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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10"> <!-- Refresh every 10 seconds -->

    <link rel="stylesheet" href="style.admin.css"> <!-- Include your existing CSS file -->
    <style>
        body {
            text-align: center; /* Center-align the content in the body */
        }

        .center-table {
            margin: 0 auto; /* Center-align the table */
            text-align: left; /* Reset text alignment inside the table cells */
        }
    </style>
    <title>Admin Panel</title>
</head>
<body style="background-color: aliceblue;" >

    <div>
        <ul>
            <li><a class="active" href="javascript:history.back()">Home</a></li>
            <li><a href="#order">Orders</a></li>
            <li><a href="#reservation">Reservations</a></li>
            <li><a href="#customer">Customers</a></li>
            <li style="float:right"><a href="javascript:history.back()">Go Back</a></li>
        </ul>
    </div>

<?php
// Function to print data as a table
function printTable($stmt, $tableName)
{
    // Execute the statement
    if ($stmt->execute()) {
        echo "<h1>$tableName</h1>";
        echo "<table class='your-table-class center-table' border='5'>"; // Add a class for styling and centering
        echo "<tr>";

        // Get the column names
        $meta = $stmt->result_metadata();
        while ($field = $meta->fetch_field()) {
            echo "<th>{$field->name}</th>";
        }

        echo "</tr>";

        // Get and print the data
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "<br><div><ul><li><a ></a></li></ul></div><br>";

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Retrieve and print data from the order table
$stmtfood_Order = $conn->prepare("SELECT * FROM `food_order`");
printTable($stmtfood_Order, 'Food_Orders');

// Retrieve and print data from the reservation table
$stmtReservation = $conn->prepare("SELECT * FROM reservation");
printTable($stmtReservation, 'Reservations');

// Retrieve and print data from the Customers table
$stmtCustomer = $conn->prepare("SELECT * FROM Customer");
printTable($stmtCustomer, 'Customer');

// Close the connection
$conn->close();
?>

    

</body>
</html>
