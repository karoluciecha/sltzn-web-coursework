<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dbname = $_POST["dbname"];
    header("Location: show.php?dbname=" . urlencode($dbname));
    exit();
}
?>