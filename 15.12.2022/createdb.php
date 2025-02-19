<!DOCTYPE html>
<?php

$desiredName = $_POST["dbname"];
$cookieName = "errCreatedb";
$con = mysqli_connect("localhost","root","");
$ifExists = mysqli_fetch_array(mysqli_query($con, "SHOW DATABASES LIKE '" . $desiredName . "';"));
if ($ifExists != "")
{
	if(isset($_COOKIE[$cookieName]))
	{
	}
	else
	{
		setcookie($cookieName, true, time() + 3600, "/");
	}
	mysqli_close($con);
	header("Location: ". "create.php");
}
else
{
	mysqli_query($con, "CREATE DATABASE " . $desiredName . ";");
	mysqli_query($con, "USE " . $desiredName . ";");
	mysqli_query($con, "CREATE TABLE pojazdy (id integer AUTO_INCREMENT PRIMARY KEY NOT NULL, marka varchar(50), model varchar(50), kolor varchar(50), nr_rej varchar(50), osoba_id integer NOT NULL);");
	mysqli_query($con, "CREATE TABLE osoby (id integer AUTO_INCREMENT PRIMARY KEY NOT NULL, imie varchar(50), nazwisko varchar(50), ulica varchar(50), nr_domu varchar(50), miasto varchar(50), kod_pocztowy char(6));");	
	mysqli_query($con, "ALTER TABLE pojazdy ADD CONSTRAINT osoba_id FOREIGN KEY (osoba_id) REFERENCES osoby(id);");
	
	setcookie($cookieName, false, time() - 3600, "/");
	mysqli_close($con);
	header("Location: ". "create.php");
	
}
?>
<html>
</html>