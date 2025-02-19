<!DOCTYPE html>
<?php
$desiredName = $_POST["dbname"];
$con = mysqli_connect("localhost","root","",$desiredName);
header("Location: ". "show.php");
?>
<html>
</html>