<?php
// Database connection
$host = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "emergency_services"; // Ensure this matches your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Validate and sanitize user input
$team_number = isset($_POST['team_number']) ? intval($_POST['team_number']) : null;
$dispatcher_number = isset($_POST['dispatcher_number']) ? intval($_POST['dispatcher_number']) : null;
$address = isset($_POST['address']) ? trim($_POST['address']) : '';

if (!$team_number || !$dispatcher_number || empty($address)) {
    echo "<p style='color:red;'>Error: All fields are required.</p>";
    echo "<a href='emergencyMedicalServices.html'>Go back to the form</a>";
    exit;
}

// Prepared statement to prevent SQL injection
$sql = "INSERT INTO emergency_reports (team_number, dispatcher_number, address) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("iis", $team_number, $dispatcher_number, $address);
    if ($stmt->execute()) {
        echo "<p style='color:green;'>Emergency report successfully submitted.</p>";
    } else {
        echo "<p style='color:red;'>Error submitting report: " . $stmt->error . "</p>";
    }
    $stmt->close();
} else {
    echo "<p style='color:red;'>Database error: " . $conn->error . "</p>";
}

// Close the connection
$conn->close();
?>
<br>
<a href="emergencyMedicalServices.html">Back to form</a>