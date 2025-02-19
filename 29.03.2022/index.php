<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h2>Formularz</h2>
<form action="index.php" method="POST">

<label for="one">Wartość A:</label>
  <input type="text" id="one" name="one"><br><br>
  <label for="two">Wartość B:</label>
  <input type="text" id="two" name="two"><br><br>
  <label for="count">Wartość C:</label>
  <input type="text" id="count" name="count"><br><br>
  <label for="four">Wartość D:</label>
  <input type="text" id="four" name="four"><br><br>
  <label for="words">Tekst:</label>
  <input type="text" id="words" name="words"><br><br>
			<input name="sub1" id="sub1" type="submit" value="Wyślij"><br><br>
			</form>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(!is_numeric($_POST['one']) || !is_numeric($_POST['two']) || !is_numeric($_POST['count']) || !is_numeric($_POST['four'])) {
					echo "ERROR: Wprowadzone wartości muszą być liczbami.";
				}
				else if ($_POST['count'] <= 0) {
					echo "ERROR: Ilść elementów w tablicy musi być większa od 0.";
				}
				else {
				function ZamienLiczbyJesliTrzeba($num1, $num2) {
					echo "Wynik działania funkcji 1:<br>";
					if ($num1 > $num2) {
						echo $num2 . ", " . $num1 . "<br><br>";
					}
					else {
						echo $num1 . ", " . $num2 . "<br><br>";
					}
				}
				function SumaLiczb($zakres1, $zakres2) {
					echo "Wynik działania funkcji 2:<br>";
					if ($zakres1 > $zakres2) {
						$zakres3 = $zakres1;
						$zakres1 = $zakres2;
						$zakres2 = $zakres3;
					}
					while ($zakres1 <= $zakres2) {
						$result += $zakres1;
						$zakres1++;
					}
					echo $result . "<br><br>";
				}
				function ListaLiczb($zakres1, $zakres2, $ilosc) {
					echo "Wynik działania funkcji 3:";
					if ($zakres1 > $zakres2) {
						$zakres3 = $zakres1;
						$zakres1 = $zakres2;
						$zakres2 = $zakres3;
					}
					$tab = new SplFixedArray($ilosc);
					echo "<ul>";
					for($i = 0; $i < $ilosc; $i++) {
						$tab[$i] = rand($zakres1, $zakres2);
						echo "<li>" . $tab[$i] . "</li>";
					}
					echo "</ul>";
				}
				function WyswietlLiczby_ObliczSrednia($ilosc1, $ilosc2, $zakres1, $zakres2) {
					echo "Wynik działania funkcji 4:";
					if ($zakres1 > $zakres2) {
						$zakres3 = $zakres1;
						$zakres1 = $zakres2;
						$zakres2 = $zakres3;
					}
					if ($ilosc1 > $ilosc2) {
						$ilosc3 = $ilosc1;
						$ilosc1 = $ilosc2;
						$ilosc2 = $ilosc3;
					}
					$num = rand($ilosc1, $ilosc2);
					$tab = new SplFixedArray($num);
					echo "<table><tr>";
					for($i = 0; $i < $num; $i++) {
						$tab[$i] = rand($zakres1, $zakres2);
				echo "<td>" . $tab[$i] . "</td>";
				$avg += $tab[$i];
					}
					echo "</tr></table>";
					$avg = $avg / $num;
					echo "Średnia arytmetyczna liczb z tablicy to: " . $avg . "<br><br>";
				}
				function DzielenieTekstow($wyrazenie_zlozone) {
					echo "Wynik działania funkcji 5:";
					$tab = explode(",", $wyrazenie_zlozone);
					echo $tab[0];
				}
				ZamienLiczbyJesliTrzeba($_POST['one'], $_POST['two']);
				SumaLiczb($_POST['one'], $_POST['two']);
				ListaLiczb($_POST['one'], $_POST['two'], $_POST['count']);
				WyswietlLiczby_ObliczSrednia($_POST['one'], $_POST['two'], $_POST['count'], $_POST['four']);
				DzielenieTekstow($_POST['words']);

			}
			}
			?>

        </main>
    </body>
</html>