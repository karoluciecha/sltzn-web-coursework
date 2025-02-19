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
	setcookie($cookieName, false, time() - 3600, "/");
	mysqli_close($con);
	header("Location: ". "create.php");
	
}
?>
<html>
</html>