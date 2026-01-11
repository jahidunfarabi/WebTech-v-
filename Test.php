<?php
// Database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$database = "database_name";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// SQL query to fetch data
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Initialize an array to store the data
    $data = array();
   // Fetch data from each row
    while ($row = $result->fetch_assoc()) {
        // Add each row to the data array
        $data[] = $row;
    }
    // Convert data array to JSON format
    $json_data = json_encode($data);
       echo $json_data;
} else {
    // No data found
    echo "No data found";
}
// Close connection
$conn->close();
?>