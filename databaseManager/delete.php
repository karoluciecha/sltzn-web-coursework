<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Delete Record</title>
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
        <h1>Delete Record by ID</h1>
        <form method="POST">
            <input type="number" name="id" placeholder="Enter ID to delete" required min="1">
            <br><br>
            <input type="submit" value="Delete Record">
        </form>
        <br><a href="databaseManager.html">Back to Home</a>
		<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDatabase";

        // Connect to MySQL without specifying a database
        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("<p id='err'>Connection failed: " . $conn->connect_error . "</p>");
        }

        // Check if database exists
        $dbCheck = $conn->query("SHOW DATABASES LIKE '$dbname'");
        if ($dbCheck->num_rows == 0) {
            die("<p id='err'>Database <strong>$dbname</strong> does not exist ❌</p>");
        }

        // Connect to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("<p id='err'>Connection to database failed: " . $conn->connect_error . "</p>");
        }

        // Ensure 'users' table exists
        $tableCheck = $conn->query("SHOW TABLES LIKE 'users'");
        if ($tableCheck->num_rows == 0) {
            die("<p id='err'>Table <strong>users</strong> does not exist ❌</p>");
        }

        // Delete Data (if form is submitted)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = intval($_POST["id"]);

            if ($id > 0) {
                // Check if ID exists before deleting
                $checkId = $conn->prepare("SELECT id FROM users WHERE id = ?");
                $checkId->bind_param("i", $id);
                $checkId->execute();
                $checkId->store_result();

                if ($checkId->num_rows > 0) {
                    $checkId->close();
                    
                    // Proceed with deletion
                    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
                    $stmt->bind_param("i", $id);

                    if ($stmt->execute()) {
                        echo "<p id='suc'>Record with ID $id deleted successfully ✅</p>";
                    } else {
                        echo "<p id='err'>Error deleting record: " . $stmt->error . "</p>";
                    }

                    $stmt->close();
                } else {
                    echo "<p id='err'>Record with ID <strong>$id</strong> does not exist ❌</p>";
                }
            } else {
                echo "<p id='err'>Invalid ID. Please enter a valid number ❌</p>";
            }
        }

        $conn->close();
        ?>
    </main>
</body>
</html>