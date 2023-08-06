php
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

$query = "SELECT id, humidity_value FROM humidity_data";
$result = $conn->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . ", Humidity Value: " . $row['humidity_value'] . "<br>";
        }
    } else {
        echo "No records found.";
    }
} else {
    echo "Query failed: " . $conn->error;
}

// Close the connection
$conn->close();
?>