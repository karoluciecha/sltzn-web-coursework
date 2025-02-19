<?php
if ($_POST["nrzr"] == "" || $_POST["nrd"] == "" || $_POST["a"] == "") {
	header("Location: ". "pogotowie.html");
} else {
	$con = mysqli_connect("localhost","root","","ratownictwo");
	mysqli_query($con,
	"INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia)
	VALUES (".$_POST["nrzr"].", ".$_POST["nrd"].", '".$_POST["a"]."', 0, '".date("h:i:s")."');");
	mysqli_close($con);
	header("Location: ". "pogotowie.html");
}
?>