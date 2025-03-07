<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Database Creation</title>
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
<h1>Database Creation</h1>
<form id="creating" method="POST" action="createdb.php">
<label for="dbname">Enter the name of the database to create:</label><br>
<input class="text" type="text" id="dbname" name="dbname" required autofocus><br>
<?php
if (isset($_COOKIE["errCreatedb"])) {
    if ($_COOKIE["errCreatedb"] == "1") {
        echo "<p id='err'>Error: Database creation failed.</p>";
    } elseif ($_COOKIE["errCreatedb"] == "0") {
        echo "<p id='suc'>Database created successfully.</p>";
    }
}
?>
<br>
<button type="submit">Create Database</button>
</form>
</main>
</body>
</html>