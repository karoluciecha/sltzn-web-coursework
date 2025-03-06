<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all flight data
$sql = "SELECT * FROM departures ORDER BY flight_time ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $file_path = "flight_data.txt";
    $file = fopen($file_path, "w");

    // Add column headers
    fwrite($file, "ID | Plane ID | Flight Number | Destination | Time | Date | Status\n");
    fwrite($file, "-------------------------------------------------------------------------\n");

    // Add flight data
    while ($row = $result->fetch_assoc()) {
        $line = "{$row['id']} | {$row['plane_id']} | {$row['flight_number']} | {$row['flight_destination']} | {$row['flight_time']} | {$row['flight_day']} | {$row['flight_status']}\n";
        fwrite($file, $line);
    }

    fclose($file);

    // Serve the file for download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="flightData.txt"');
    readfile($file_path);

    // Delete the file after download (optional)
    unlink($file_path);
    exit;
} else {
    echo "No flight data found.";
}

$conn->close();
?>