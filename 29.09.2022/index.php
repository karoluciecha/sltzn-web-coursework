<!DOCTYPE html>
<html lang="pl">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Karol Uciecha 4d</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='all'>
        <div id='name'>
            <br><br>
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
				/*error_reporting(0);*/
				$date = new DateTime();
				$current_timestamp = $date->getTimestamp();
				$chck = false;
				setlocale( LC_ALL, 'pl_PL', 'pl','Polish_Poland.28592');
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$i = 0;
                    $fname = ucfirst($_POST['fname']);
                    $lname = ucfirst($_POST['lname']);
                    $age = $_POST['age'];
                    $city = ucfirst($_POST['city']);
                    $pcode = $_POST['pcode'];
                    $street = ucfirst($_POST['street']);
                    if (empty($fname) || empty($lname) || empty($age) || empty($city) || empty($pcode) || empty($street)) {
                        echo "<p class='error'>Proszę uzupełnić wszystkie dane.</p>";
						$chck = false;
                    } else {
                        if (!is_numeric($age)) {
                            echo "<p class='error'>Wiek musi być liczbą.</p>";
							$chck = false;
                        }
						else {
							if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $pcode)) {
                                echo "<p class='error'>Wprowadź poprawny kod pocztowy.</p>";
								$chck = false;
                            }
							else {
								$chck = true;
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
				if ($chck) {
					while (file_exists('./Dane/' . $i . '.txt')) {
						$i++;
					}
					$fil = fopen('./Dane/' . $i . '.txt', 'w+');
					$data = $fname . "\n" . $lname . "\n" . $age . "\n" . $city . "\n" . $pcode . "\n" . $street;
					fwrite($fil, $data);
					rewind($fil);
					echo "
					<table>
						<tr>
							<td>Imię</td>
							<td>" . fgets($fil) . "</td> 
						</tr>
						<tr>
							<td>Nazwisko</td>
							<td>" . fgets($fil) . "</td> 
						</tr>
						<tr>
							<td>Wiek</td>
							<td>" . fgets($fil) . "</td> 
						</tr>
						<tr>
							<td>Miasto</td>
							<td>" . fgets($fil) . "</td> 
						</tr>
						<tr>
							<td>Kod pocztowy</td>
							<td>" . fgets($fil) . "</td> 
						</tr>
						<tr>
							<td>Ulica</td>
							<td>" . fgets($fil) . "</td> 
						</tr>";
					rewind($fil);
					echo "<caption>Dane klienta: " . fgets($fil) . " " . fgets($fil) . "</caption>
					</table>";    
					}
				}
            ?>
        </div>
	<footer>	
	    <div id='source'>
            <?php
            echo "<br><br><p>" . "Otwartym plikiem jest plik: " . basename(__FILE__) . "</p>";
			if ($chck) {
				fclose($fil);
			}
            ?>
        </div>
		<div id="runningTime">
		</div>
	</footer>
</body>
<script>
$(document).ready(function() {
 setInterval(runningTime, 500);
});
function runningTime() {
  $.ajax({
    url: 'timeScript.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>
</html>