<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Karol Uciecha 3d</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id='all'>
        <div id='name'>
            <br>
            <br>
            <h1>Karol Uciecha</h1>
        </div>
        <div id='logo'>
            <img src='logo.png' alt='logo'>
        </div>
        <div id='form'>
            <form action="index.php" method="POST">
                <fieldset id="first">
                    <legend>Dane osobowe</legend><br>
                    <label for="fname">Imię:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Nazwisko:</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="age">Wiek:</label>
                    <input type="text" id="age" name="age"><br><br>
                </fieldset><br>

                <fieldset id="second">
                    <legend>Adres</legend><br>
                    <label for="city">Miasto:</label>
                    <input type="text" id="city" name="city"><br><br>
                    <label for="pcode">Kod pocztowy:</label>
                    <input type="text" id="pcode" name="pcode"><br><br>
                    <label for="street">Ulica:</label>
                    <input type="text" id="street" name="street"><br><br>
                </fieldset><br>
                <input type="submit" value="Wyślij"><br>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fname = ucfirst($_POST['fname']);
                    $lname = ucfirst($_POST['lname']);
                    $age = $_POST['age'];
                    $city = ucfirst($_POST['city']);
                    $pcode = $_POST['pcode'];
                    $street = ucfirst($_POST['street']);
                    if (empty($fname) || empty($lname) || empty($age) || empty($city) || empty($pcode) || empty($street)) {
                        echo "<p class='error'>Proszę uzupełnić wszystkie dane.</p>";
                    } else {
                        if (!is_numeric($age)) {
                            echo "<p class='error'>Wiek musi być liczbą.</p>";
                        } else {
                            if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $pcode)) {
                                echo "<p class='error'>Wprowadź poprawny kod pocztowy.</p>";
                            }
                        }
                    }
                }
                ?>
            </form>
        </div>
        <div id='tab'>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fname = ucfirst($_POST['fname']);
                $lname = ucfirst($_POST['lname']);
                $age = $_POST['age'];
                $city = ucfirst($_POST['city']);
                $pcode = $_POST['pcode'];
                $street = ucfirst($_POST['street']);
                if (empty($fname) || empty($lname) || empty($age) || empty($city) || empty($pcode) || empty($street)) {
                } else {
                    if (!is_numeric($age)) {
                    } else {
                        if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $pcode)) {
                        } else {
                            echo "
                            <table>
  <tr>
    <td>Imię</td>
    <td>" . $fname . "</td> 
  </tr>
  <tr>
    <td>Nazwisko</td>
    <td>" . $lname . "</td> 
  </tr>
  <tr>
    <td>Wiek</td>
    <td>" . $age . "</td> 
  </tr>
  <tr>
  <td>Miasto</td>
  <td>" . $city . "</td> 
</tr>
<tr>
<td>Kod pocztowy</td>
<td>" . $pcode . "</td> 
</tr>
<tr>
<td>Ulica</td>
<td>" . $street . "</td> 
</tr>
<caption>Dane klienta</caption>
</table>";
                        }
                    }
                }
            }
            ?>
        </div>
        <div id='source'>
            <?php
            echo "<br><br><h2>" . "Otwartym plikiem jest plik: " . basename(__FILE__) . "</h2>";
            ?>
        </div>
        <div id='time'>
            <?php
            echo "<br><br><h2>" . date("d.m.Y") . ", aktualny czas: " . date("H:i") . "</h2>";
            ?>
        </div>
</body>


</html>