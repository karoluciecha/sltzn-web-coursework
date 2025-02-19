<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Wyświetlanie bazy</title>
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
	<h1>Wyświetlanie bazy</h1>
	<form id="showind" method="POST" action="showdb.php">
		<label for="dbname">Wybierz bazę danych:</label><br>
		<select id="dbname" name="dbname" required>
		<option value=""></option>
		<?php
			$con = mysqli_connect("localhost","root","");
			$result = mysqli_query($con,"SHOW DATABASES"); 
			while ($row = mysqli_fetch_array($result)) { 
				echo '<option value="' . $row[0] . '">' . $row[0] . '</option>'; 
			}
		?>
		</select><br>
		<div class="fieldwrapper">
		</div>
	<br><button type="submit">Filtruj</button><br>
	<?php
			if(isset($_COOKIE["errCreatedb"]))
				{
					echo '<p id="err">Baza danych o podanej nazwie już istnieje!</p>';
				}
		?>
</form>
</main>
</body>
</html>