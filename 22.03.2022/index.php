<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Rozrywka</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="grad">
	<section id="all">
	<section id="top">
		<img src="gifOne.gif">
	</section>
	<section id="lotto">
		<img src="lotto.gif">
		<form action="index.php" method="POST">
		<h1>Losowanie liczb Lotto</h1><br>
		<input type="submit" value="Graj w Lotto">
</form>
		<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$a = rand(1, 49);
$b = rand(1, 49);
if ($b == $a) $b++;
$c = rand(1, 49);
for ($i = $c; $i == $a || $i == $b; $i++) $c++;
$d = rand(1, 49);
for ($i = $d; $i == $a || $i == $b || $i == $c; $i++) $d++;
$e = rand(1, 49);
for ($i = $e; $i == $a || $i == $b || $i == $c || $i == $d; $i++) $e++;
$f = rand(1, 49);
for ($i = $f; $i == $a || $i == $b || $i == $c || $i == $d || $i == $e; $i++) $f++;
echo "<p>Twoje liczby to: " . $a . ", " . $b . ", " . $c . ", " . $d . ", " . $e . ", " . $f . ".</p>";
}
?>
	</section>
	<section id="euroJackpot">
		<img src="eurojackpot.gif">
		<form action="index.php" method="GET">
	<h1>Losowanie liczb Eurojackpot</h1><br>
<input type="submit" class="button" name="select" value="Graj w Eurojackpot">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$a = rand(1, 50);
	$b = rand(1, 50);
	if ($b == $a) $b++;
	$c = rand(1, 50);
	for ($i = $c; $i == $a || $i == $b; $i++) $c++;
	$d = rand(1, 50);
	for ($i = $d; $i == $a || $i == $b || $i == $c; $i++) $d++;
	$e = rand(1, 50);
	for ($i = $e; $i == $a || $i == $b || $i == $c || $i == $d; $i++) $e++;
	$f = rand(1, 10);
	$g = rand(1, 10);
	if ($g == $f) {
		$g++;
		if ($g >= 10) {
		$g -= 2;
		}
	}
	echo "<p>Twoje 5 liczb z 50 to: " . $a . ", " . $b . ", " . $c . ", " . $d . ", " . $e . ".<br></p>Twoje 2 liczby z 10 to: " . $f . ", " . $g . ".";
}
?>
	<br><br><p id="digits2"></p>
	</section>
	<footer>
		<img src="gifTwo.gif">
	</footer>
	</section>
	<script src="script.js"></script>
	</body>
</html>
</div>
</body>
</html>
