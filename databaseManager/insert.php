<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Insert Data</title>
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
        <h1>Add Data to Database</h1>

        <form method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <br><br>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <br><br>
            <input type="number" name="age" placeholder="Age" required>
            <br><br>
            <input type="submit" value="Add Data">
        </form>

        <br><a href="databaseManager.html">Back to Home</a>
        <br>

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
        	die("<p id='err'>Database '$dbname' does not exist ❌</p>");
        }

        // Connect to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("<p id='err'>Connection to database failed: " . $conn->connect_error . "</p>");
        }

        // Ensure 'users' table exists
        $tableCheck = $conn->query("SHOW TABLES LIKE 'users'");
        if ($tableCheck->num_rows == 0) {
            $createTable = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100) NOT NULL,
                age INT NOT NULL CHECK (age >= 0 AND age <= 120)
            )";

            if ($conn->query($createTable) === TRUE) {
                echo "<p id='suc'>Table 'users' created successfully ✅</p>";
            } else {
                die("<p id='err'>Error creating table: " . $conn->error . "</p>");
            }
        }

        // Insert Data (if form is submitted)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $age = intval($_POST["age"]);

            if (!empty($first_name) && !empty($last_name) && ($age >= 0 && $age <= 120)) {
                $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, age) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $first_name, $last_name, $age);

                if ($stmt->execute()) {
                    echo "<p id='suc'>Data inserted successfully ✅</p>";
                } else {
                    echo "<p id='err'>Error: " . $stmt->error . "</p>";
                }

                $stmt->close();
            } else {
                echo "<p id='err'>All fields are required, and age must be between 0 - 120 ❌</p>";
            }
        }
        $conn->close();
        ?>
    </main>
</body>
</html>