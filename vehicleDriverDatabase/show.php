<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>View Database</title>
</head>
<body>
<nav>
    <ul>
        <a href="vehicleDriverDatabase.php"><li>Database Creation</li></a>
        <a href="delete.php"><li>Delete Database</li></a>
        <a href="data.php"><li>Vehicle Registration</li></a>
        <a href="show.php"><li>View Database</li></a>
    </ul>
</nav>
<main>
    <h1>View Database</h1>
    <form id="showind" method="POST" action="showdb.php">
        <label for="dbname">Select a database:</label><br>
        <select id="dbname" name="dbname" required>
            <option value=""></option>
            <?php
                $con = new mysqli("localhost", "root", "", "");
                if ($con->connect_error) {
                    die("Connection error: " . $con->connect_error);
                }
                $result = $con->query("SHOW DATABASES"); 
                while ($row = $result->fetch_array()) { 
                    echo '<option value="' . $row[0] . '">' . $row[0] . '</option>'; 
                }
                $con->close();
            ?>
        </select><br><br>
        <button type="submit">Show</button><br>
    </form>

    <?php
    if (isset($_GET['dbname'])) {
        $dbname = $_GET['dbname'];
        echo "<h2>Showing database data: $dbname</h2>";

        // Connect to selected database
        $con = new mysqli("localhost", "root", "", $dbname);
        if ($con->connect_error) {
            die("Connection error: " . $con->connect_error);
        }

        // Fetch tables in database
        $tables = $con->query("SHOW TABLES");
        while ($table = $tables->fetch_array()) {
            $tableName = $table[0];
            echo "<h3>Table: $tableName</h3>";
            $data = $con->query("SELECT * FROM $tableName");

            if ($data->num_rows > 0) {
                echo "<table><tr>";
                while ($field = $data->fetch_field()) {
                    echo "<th>" . htmlspecialchars($field->name) . "</th>";
                }
                echo "</tr>";

                while ($row = $data->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Brak danych w tabeli $tableName.</p>";
            }
        }
        $con->close();
    }
    ?>
</main>
</body>
</html>