<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $desiredName = trim($_POST["dbname"]);
    $cookieName = "errDeletedb";

    // Secure Database Connection
    $con = new mysqli("localhost", "root", "", "");
    if ($con->connect_error) {
        setcookie($cookieName, "1", time() + 3600, "/");
        die("Connection failed: " . $con->connect_error);
    }

    // Sanitize input
    $desiredName = $con->real_escape_string($desiredName);

    $query = "SHOW DATABASES LIKE '$desiredName'";
    $result = $con->query($query);

    if ($result->num_rows == 0) {
        setcookie($cookieName, "1", time() + 3600, "/");
        header("Location: delete.php");
        exit();
    } else {
        // Drop database
        $query = "DROP DATABASE `$desiredName`";
        if ($con->query($query) === TRUE) {
            setcookie($cookieName, "0", time() + 3600, "/");
        } else {
            setcookie($cookieName, "1", time() + 3600, "/");
            die("Error deleting database: " . $con->error);
        }
        header("Location: delete.php");
        exit();
    }

    $con->close();
}
?>