<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="all">
        <div id="banner">
            <h1>Information Page</h1>
        </div>
        <div id="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div id="form">
            <form method="POST" action="informationDatabase.php">
                <fieldset>
                    <legend>Enter Your Information</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea><br><br>

                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>

            <?php
            // Database Connection (Update credentials as needed)
            $host = "localhost";
            $username = "root"; // Change if necessary
            $password = "";
            $database = "info_db"; // Change to your actual database name

            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("<p class='error'>Database connection failed: " . $conn->connect_error . "</p>");
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $message = trim($_POST['message']);

                if (!empty($name) && !empty($email) && !empty($message)) {
                    // Secure input data against SQL injection
                    $stmt = $conn->prepare("INSERT INTO users (name, email, message) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $name, $email, $message);

                    if ($stmt->execute()) {
                        echo "<p style='color:green;'>Data successfully submitted.</p>";
                    } else {
                        echo "<p class='error'>Error submitting data: " . $stmt->error . "</p>";
                    }

                    $stmt->close();
                } else {
                    echo "<p class='error'>Please fill in all fields.</p>";
                }
            }

            $conn->close();
            ?>
        </div>
        <div id="tab">
            <table>
                <caption>Submitted Data</caption>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>

                <?php
                // Fetch and display submitted data
                $conn = new mysqli($host, $username, $password, $database);
                if ($conn->connect_error) {
                    die("<p class='error'>Database connection failed: " . $conn->connect_error . "</p>");
                }

                $sql = "SELECT name, email, message FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row["name"]) . "</td>
                                <td>" . htmlspecialchars($row["email"]) . "</td>
                                <td>" . htmlspecialchars($row["message"]) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data available</td></tr>";
                }

                $conn->close();
                ?>
            </table>
        </div>
        <div id="source">
            <p>Page File Name: <?php echo basename(__FILE__); ?></p>
        </div>
        <div id="time">
            <p>Current Time: <?php echo date("Y-m-d H:i:s"); ?></p>
        </div>
    </div>
</body>
</html>