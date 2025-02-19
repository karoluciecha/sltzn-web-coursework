<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularz PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    date_default_timezone_set('Poland/Katowice');
    echo "<p>" . date('D M Y h:i:s A', time()) . "</p>";
    echo "<p>Nazwa pliku: " . basename(__FILE__) . "</p><br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    ?>
    <form action="index.php" method="post" novalidate>
        <label for="fname">Imię:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Nazwisko:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="age">Wiek:</label><br>
        <input type="text" id="age" name="age"><br><br>
        <label for="pcode">Kod pocztowy:</label><br>
        <input type="text" id="pcode" name="pcode"><br>
        <label for="city">Miasto:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="street">Ulica:</label><br>
        <input type="text" id="street" name="street"><br><br>
        <input type="reset" name="reset" value="Resetuj">
        <input type="submit" name="submit" value="Wyślij"><br><br><br>
    </form>
</body>
<?php
$pcode = "/^[0-9]{2}-?[0-9]{3}$/Du";
if ($_POST["submit"]) {
    if ($_POST["fname"] == "" || $_POST["lname"] == "" || $_POST["age"] == "" || $_POST["pcode"] == "" || $_POST["city"] == "" || $_POST["street"] == "") {
        echo "<h3 class='error'>Proszę poprawnie uzupełnić wszystkie dane i spróbować ponownie.</h3>";
    } else if (preg_match($pcode, $_POST["pcode"]) == false) {
        echo "<h3 class='error'>Wprowadzono błędny kod pocztowy. Spróbuj ponownie.</h3>";
    } else if (is_numeric($_POST["age"] == false && $_POST["age"] > 0)) {
        echo "<h3 class='error'>Wiek musi być liczbą większą od 0.</h3>";
    } else {
        $fname = strtolower($_POST["fname"]);
        $lname = strtolower($_POST["lname"]);
        $city = strtolower($_POST["city"]);
        $street = strtolower($_POST["street"]);
        $fname = ucfirst($fname);
        $lname = ucfirst($lname);
        $city = ucfirst($city);
        $street = ucfirst($street);
        echo "<h3>Wprowadzone dane: " . "</h3>";
        echo "<p>Imię: " . $fname . "</p>";
        echo "<p>Nazwisko: " . $lname . "</p>";
        echo "<p>Wiek: " . $_POST["age"] . "</p>";
        echo "<p>Kod pocztowy: " . $_POST["pcode"] . "</p>";
        echo "<p>Miasto: " . $city . "</p>";
        echo "<p>Ulica: " . $street . "</p>";
    }
}
?>

</html>