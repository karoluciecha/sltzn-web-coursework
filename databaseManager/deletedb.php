<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Creating Database...</title>
</head>
<body>
    <nav>
        <h1>Database Operations</h1>
        <ul>
            <li><a href="createdb.php">Create Database</a></li>
            <li><a href="deletedb.php">Delete Database</a></li>
            <li><a href="insert.php">Insert Data</a></li>
            <li><a href="delete.php">Delete Data</a></li>
            <li><a href="show.php">View Records</a></li>
        </ul>
    </nav>
    <main>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDatabase"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("<p id='err'>Connection failed: " . $conn->connect_error . "</p>");
}

// Check if database exists
$checkDb = $conn->query("SHOW DATABASES LIKE '$dbname'");

if ($checkDb->num_rows == 0) {
    echo "<p id='err'>Database <strong>$dbname</strong> does not exist ❌</p>";
} else {
    // Attempt to delete database if it exists
    $sql = "DROP DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "<p id='suc'>Database <strong>$dbname</strong> deleted successfully ✅</p>";
    } else {
        echo "<p id='err'>Error deleting database: " . $conn->error . "</p>";
    }
}

// Close connection
$conn->close();
?>
        <br><a href="databaseManager.html">Back to Home</a>
    </main>
</body>
</html>