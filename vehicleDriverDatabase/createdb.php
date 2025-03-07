<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $desiredName = trim($_POST["dbname"]);
    $cookieName = "errCreatedb";

    // Secure connection
    $con = new mysqli("localhost", "root", "");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Sanitize input
    $desiredName = $con->real_escape_string($desiredName);

    $query = "SHOW DATABASES LIKE '$desiredName'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        setcookie($cookieName, "1", time() + 3600, "/");
        header("Location: vehicleDriverDatabase.php");
        exit();
    } else {
        // Create database
        $query = "CREATE DATABASE `$desiredName`";
        if ($con->query($query) === TRUE) {
            $con->select_db($desiredName);

            // Create tables
            $createOsoby = "CREATE TABLE driver (
                id INT AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(50),
                lname VARCHAR(50),
                street VARCHAR(50),
                house_no VARCHAR(50),
                city VARCHAR(50),
                zip_code CHAR(6)
            )";
            $con->query($createOsoby);

            $createPojazdy = "CREATE TABLE car (
                id INT AUTO_INCREMENT PRIMARY KEY,
                make VARCHAR(50),
                model VARCHAR(50),
                color VARCHAR(50),
                reg_no VARCHAR(50),
                driver_id INT NOT NULL,
                FOREIGN KEY (driver_id) REFERENCES driver(id)
            )";
            $con->query($createPojazdy);

            setcookie($cookieName, "0", time() + 3600, "/");
            header("Location: vehicleDriverDatabase.php");
            exit();
        } else {
            die("Error creating database: " . $con->error);
        }
    }

    $con->close();
}
?>