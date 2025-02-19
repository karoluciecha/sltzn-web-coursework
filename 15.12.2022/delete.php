<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Usuwanie bazy</title>
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
<h1>Usuwanie bazy</h1>
<form id="deleting" method="POST" action="deletedb.php">
<label for="dbname">Nazwa bazy do usunięcia:</label><br>
<input class="text" type="text" id="dbname" name="dbname" required autofocus><br>
<?php
if(isset($_COOKIE["errDeletedb"]))
	{
		echo '<p id="err">Baza danych o podanej nazwie nie istnieje!</p>';
	}
?>
<br>
<button type="submit">Usuń bazę</button>
</form>
</main>
</body>
</html>