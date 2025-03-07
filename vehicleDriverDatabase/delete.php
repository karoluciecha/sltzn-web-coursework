<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Delete Database</title>
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
<h1>Delete Database</h1>
<form id="deleting" method="POST" action="deletedb.php">
<label for="dbname">Eneter the name of the database to delete:</label><br>
<input class="text" type="text" id="dbname" name="dbname" required autofocus><br>
<?php
if (isset($_COOKIE["errDeletedb"])) {
    if ($_COOKIE["errDeletedb"] == "1") {
        echo "<p id='err'>Error: Database deletion failed.</p>";
    } elseif ($_COOKIE["errDeletedb"] == "0") {
        echo "<p id='suc'>Database deleted successfully.</p>";
    }
}
?>
<br>
<button type="submit">Delete Database</button>
</form>
</main>
</body>
</html>