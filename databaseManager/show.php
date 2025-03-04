<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>View Records</title>
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
        <h1>Database Records</h1>

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

        // Fetch Data
        $sql = "SELECT id, first_name, last_name, age FROM users ORDER BY id ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["first_name"] . "</td>
                        <td>" . $row["last_name"] . "</td>
                        <td>" . $row["age"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p id='err'>No records found ❌</p>";
        }

        $conn->close();
        ?>

        <br><a href="databaseManager.html">Back to Home</a>
    </main>
</body>
</html>