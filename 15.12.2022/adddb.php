<!DOCTYPE html>
<?php
$desiredName = $_POST["dbname"];
$con = mysqli_connect("localhost","root","",$desiredName);
$count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(id) AS id FROM osoby;"));
$countnext = intval($count["id"]) + 1;

if (!$_POST["exist"]) {
		mysqli_query($con, 'INSERT INTO pojazdy (marka, model, kolor, nr_rej, osoba_id) VALUES ("'.$_POST['manufacturer'].'", "'.$_POST['model'].'", "'.$_POST['color'].'", "'.$_POST['noreg'].'", "'.$_POST['idos'].'");');
}
else {
	mysqli_query($con, 'INSERT INTO osoby (imie, nazwisko, ulica, nr_domu, miasto, kod_pocztowy) VALUES ("'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['street'].'", "'.$_POST['nohouse'].'", "'.$_POST['city'].'", "'.$_POST['pcode'].'");');
	mysqli_query($con, 'INSERT INTO pojazdy (marka, model, kolor, nr_rej, osoba_id) VALUES ("'.$_POST['manufacturer'].'", "'.$_POST['model'].'", "'.$_POST['color'].'", "'.$_POST['noreg'].'", "'.$countnext.'");');
}

mysqli_close($con);
header("Location: ". "data.php");
// SELECT * FROM pojazdy INNER JOIN osoby ON pojazdy.osoba_id = osoby.id WHERE pojazdy.osoba_id = "1";
?>
<html>
</html>