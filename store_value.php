<?php
// Replace the placeholders with your actual database credentials
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'smart';

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'value' parameter is set in the GET request
if (isset($_GET['value'])) {
    // Get the humidity value from the GET parameter
    $humidityValue = $_GET['value'];

    // Store the humidity value in the database
    $query = "INSERT INTO humidity_data (humidity_value) VALUES ('$humidityValue')";
    $result = $conn->query($query);

    if ($result) {
        // Redirect to the get_sensor_data.php page with the value passed as a GET parameter
        header("Location: get_sensor_data.php?value=$humidityValue");
        exit;
    } else {
        echo "Query failed: " . $conn->error;
        exit;
    }
}

// Close the connection
$conn->close();
?>