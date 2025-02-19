<!DOCTYPE html>
<html>
<head>
	<?php
		if (!isset($_COOKIE["cookiebycia"])) {
			setcookie("cookiebycia", "ktos.tu.byl.w.ciagu.ostatniej.godziny", time() + 3600);
		}
	?>
	<meta charset="UTF-8">
	<title>Odloty samolotów</title>
	<link rel="stylesheet" href="style.css"> 
</head>

<body>
<?php
if (!isset($_COOKIE["cookiebycia"])) {
	echo '<div class="cookiefix"><br><br>
	<form><p>Ta strona wykorzystuje pliki cookie.</p><br>
	<p>Aby zmienić ustwienia naciśnij przycisk "Zmień ustawienia".</p>
	<p>Jeśli chcesz kontynuować naciśnij przycisk "OK".</p>
	<input type="submit" value="OK"> <input type="submit" value="Zmień ustawienia"></form>
	</div>';
}

?>
	<div class="s1">
		<h2>Odloty z lotniska</h2>
	</div>
	<div class="s2"><img src="zad6.png" alt="logotyp"></div>
	<div class="main">
		<table>
			<tr>
				<th>LP.</th>
				<th>NUMER REJSU</th>
				<th>CZAS</th>
				<th>KIERUNEK</th>
				<th>STATUS</th>
			</tr>
			
			<?php
			$con = mysqli_connect("localhost","root","","egzamin");
			$result = mysqli_query($con, "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;");
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['nr_rejsu'] . "</td>";
				echo "<td>" . $row['czas'] . "</td>";
				echo "<td>" . $row['kierunek'] . "</td>";
				echo "<td>" . $row['status_lotu'] . "</td>";
				echo "</tr>";
			}
			mysqli_close($con);
			?>
		</table>
	</div>
	<footer>
	<div id="cookie">
		<?php
			if (isset($_COOKIE["cookiebycia"])) {
				echo '<p class="ciasto">Miło nam, że nas znowu odwiedziłeś</p>';
			}
			else {
				echo "<p style='font-style: italic;'class='ciasto'>Sprawdź regulamin naszej strony!</p>";
			}
		?>
	</div>
	<div class="pobierz">
		<a href="kw1.jpg">Pobierz obraz</a>
	</div>
<div class="autor">
Autor: Karol Uciecha
</div>
</footer>
</body>
</html>