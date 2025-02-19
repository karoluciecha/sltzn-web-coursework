<!DOCTYPE html>
<?php

$desiredName = $_POST["dbname"];
$cookieName = "errDeletedb";
$con = mysqli_connect("localhost","root","");
$ifExists = mysqli_fetch_array(mysqli_query($con, "SHOW DATABASES LIKE '" . $desiredName . "';"));
if ($ifExists == "")
{
	if(isset($_COOKIE[$cookieName]))
	{
	}
	else
	{
		setcookie($cookieName, true, time() + 3600, "/");
	}
//	mysqli_query($con,
//	"INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia)
//	VALUES (".$_POST["nrzr"].", ".$_POST["nrd"].", '".$_POST["a"]."', 0, '".date("h:i:s")."');");
	mysqli_close($con);
	header("Location: ". "delete.php");
}
else
{
	mysqli_query($con, "DROP DATABASE " . $desiredName . ";");
	setcookie($cookieName, false, time() - 3600, "/");
	mysqli_close($con);
	header("Location: ". "delete.php");
	
}
?>
<html>
</html>