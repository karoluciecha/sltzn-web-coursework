<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Tworzenie bazy</title>
</head>
<body>
<nav>
<ul>
<a href="create.php"><li>Tworzenie bazy</li></a>
<a href="delete.php"><li>Usuwanie bazy</li></a>
<a href="data.php"><li>Rejestracja pojazdów</li></a>
<a href="show.php"><li>Wyświetlanie bazy</li></a>
</ul>
</nav>
<main>
<h1>Tworzenie bazy</h1>
<form id="creating" method="POST" action="createdb.php">
<label for="dbname">Nazwa bazy do utworzenia:</label><br>
<input type="text" id="dbname" name="dbname" required><br>
<?php
if(isset($_COOKIE["errCreatedb"]))
	{
		echo '<p id="err">Baza danych o podanej nazwie już istnieje!</p>';
	}
?>
<br>
<button type="submit">Utwórz bazę</button>
</form>
</main>
</body>
</html>