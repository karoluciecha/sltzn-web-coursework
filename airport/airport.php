<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport";

// Connect to MySQL (without specifying a database)
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	echo "<script>console.log('Connection failed: " . $conn->connect_error . "');</script>";
	die();
}

// Create database if it doesn't exist
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Create table if it doesn’t exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS departures (
id INT AUTO_INCREMENT PRIMARY KEY,
plane_id INT NOT NULL,
flight_number VARCHAR(20) NOT NULL,
flight_destination VARCHAR(100) NOT NULL,
flight_time TIME NOT NULL,
flight_day DATE NOT NULL,
flight_status VARCHAR(50)
)";


if (!$conn->query($createTableSQL)) {
	echo "<script>console.error('Error creating table: " . $conn->error . "');</script>";
	die();
}

// Insert predefined data if table is empty
$checkData = $conn->query("SELECT COUNT(*) AS count FROM departures");
$row = $checkData->fetch_assoc();

if ($row["count"] == 0) {
	$insertDataSQL = "INSERT INTO departures (id, plane_id, flight_number, flight_destination, flight_time, flight_day, flight_status) VALUES
	(1, 1, 'FR1646', 'Naples', '09:20:00', '2019-07-25', 'Departed'),
	(2, 1, 'FR1327', 'Alicante', '09:10:00', '2019-07-25', 'Delayed 10 min'),
	(3, 2, 'W63425', 'Warsaw', '09:45:00', '2019-07-25', 'Check-in'),
	(4, 3, 'LX5647', 'London Luton', '10:03:00', '2019-07-25', 'Check-in'),
	(5, 3, 'LX5673', 'Malta', '10:06:00', '2019-07-25', ''),
	(6, 3, 'LX5622', 'Vienna', '10:13:00', '2019-07-25', ''),
	(7, 4, 'LH9821', 'Berlin', '10:16:00', '2019-07-25', ''),
	(8, 4, 'LH9888', 'Hamburg', '10:19:00', '2019-07-25', ''),
	(9, 4, 'LH9331', 'Munich', '10:22:00', '2019-07-25', ''),
	(10, 2, 'W68769', 'Zurich', '09:56:00', '2019-07-25', 'Boarding')";
	
	if (!$conn->query($insertDataSQL)) {
		echo "<script>console.error('Error inserting data: " . $conn->error . "');</script>";
		die();
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airport Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="main">
    <img src="plane.png" alt="Air Travel Logo" class="logo">
    <h1>Welcome to the Airport Database</h1>
</header>

    <section class="s1">
        <h2>Flight Information</h2>
        <?php
		$sql = "SELECT * FROM departures ORDER BY flight_time ASC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table>
			<tr>
				<th>ID</th>
				<th>Plane ID</th>
				<th>Flight Number</th>
				<th>Destination</th>
				<th>Time</th>
				<th>Date</th>
				<th>Status</th>
			</tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr>
				<td>{$row['id']}</td>
				<td>{$row['plane_id']}</td>
				<td>{$row['flight_number']}</td>
				<td>{$row['flight_destination']}</td>
				<td>{$row['flight_time']}</td>
				<td>{$row['flight_day']}</td>
				<td>{$row['flight_status']}</td>
				</tr>";
			}
			echo "</table>";
		} else {
			echo "<p id='err'>No departures found.</p>";
		}
		$conn->close();
		?>
    </section>

	<section class="s2">
    <h2>Download Data</h2>
    <br>
    <a href="generateFlightData.php" class="button">Download Flight Data</a> 
</section>


    <footer>
        <div class="download">
            <h3>Download Queries</h3>
            <a href="queries.txt" class="button">Download</a>
        </div>
        <div class="author">
            <p>Created by: Karol Uciecha</p>
        </div>
    </footer>
</body>
</html>