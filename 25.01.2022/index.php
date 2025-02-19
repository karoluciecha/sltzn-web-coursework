<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Kalkulator naukowy</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php
if ($_POST['sub2']) {
	$res = pi();
}
if ($_POST['sub']) {
	$txt1 = $_POST['n1'];
	$txt2 = $_POST['n2'];
	$oprnd = $_POST['sub'];

	if ($txt1 != '') {
		if ($oprnd == "sinus") {
			$res = sin($txt1);
		} else if ($oprnd == "cosinus") {
			$res = cos(deg2rad($txt1));
		} else if ($oprnd == "tangens") {
			$res = tan($txt1);
		} else if ($oprnd == "e") {
			$res = exp($txt1);
		} else if ($oprnd == "logarytm") {
			$res = log($txt1);
		} else if ($oprnd == "pierwiastek") {
			$res = sqrt($txt1);
		} else if ($oprnd == "silnia") {
			$silnia = 1;
			for ($i = 1; $i <= $txt1; $i++) {
				$silnia *= $i;
			}
			$res = $silnia;
		}
	} else {
		$res = 'Błąd. Nie wprowadzono żadnej liczby.';
	}
}
if ($_POST['sub3']) {
	$txt1 = $_POST['n1'];
	$txt2 = $_POST['n2'];
	$oprnd = $_POST['sub'];
	if ($txt1 != '' && $txt2 != '') {
		if ($oprnd == "+")
			$res = $txt1 + $txt2;
		else if ($oprnd == "-")
			$res = $txt1 - $txt2;
		else if ($oprnd == "x")
			$res = $txt1 * $txt2;
		else if ($oprnd == "/")
			$res = $txt1 / $txt2;
		else if ($oprnd == "potęgowanie")
			$res = pow($txt1, $txt2);
		else if ($oprnd == "max")
			$res = max($txt1, $txt2);
		else if ($oprnd == "min")
			$res = min($txt1, $txt2);
	} else {
		$res = 'Błąd. To działanie wymaga wprowadzenia dwóch iczb.';
	}
}

?>

<body>
	<div class="container">
		<form method="post" action="index.php">
			<h1>KALKULATOR NAUKOWY</h1><br><br>
			<label for="n1">Pierwsza liczba: </label>
			<input name="n1" value=""><br>
			<label for="n2">Druga liczba: </label>
			<input name="n2" value=""><br>
			<input type="submit" name="sub3" value="+">
			<input type="submit" name="sub3" value="-">
			<input type="submit" name="sub3" value="x">
			<input type="submit" name="sub3" value="/">
			<br>
			<input type="submit" name="sub" value="sinus">
			<input type="submit" name="sub" value="cosinus">
			<input type="submit" name="sub" value="tangens">
			<input type="submit" name="sub" value="e">
			<br>
			<input type="submit" name="sub" value="logarytm">
			<input type="submit" name="sub2" value="pi">
			<input type="submit" name="sub3" value="potęgowanie">
			<input type="submit" name="sub" value="pierwiastek">
			<br>
			<input type="submit" name="sub" value="silnia">
			<input type="submit" name="sub3" value="max">
			<input type="submit" name="sub3" value="min"><br>
			<label for="result">Wynik: </label>
			<input type='text' name="result" value="<?php echo $res; ?>"><br>
			<input type="reset" name="reset" value="Resetuj">

		</form>
	</div>
	<p class='cp'> &copy; <?php echo date("Y"); ?> Karol Uciecha</p>
</body>

</html>