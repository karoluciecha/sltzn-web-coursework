    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>Karol Uciecha 3d</title>
    </head>

    <body>
        <section id="forms">
            <form action="index.php" method="POST">
                <br><br><label for="fname">Imię: </label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Nazwisko: </label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="age">Wiek: </label>
                <input type="number" id="age" name="age"><br><br>
                <label for="city">Miasto: </label>
                <input type="text" id="city" name="city"><br><br>
                <label for="street">Ulica: </label>
                <input type="text" id="street" name="street"><br><br>
                <input type="submit" value="Wyślij">
            </form>
        </section>
        <section id="output">
            <?php
            session_set_cookie_params(0);
            session_start();
            if (!isset($_SESSION["allContent"])) {
                $_SESSION["allContent"] = [];
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $check = true;
                $data = [
                    "fname" => ucfirst($_POST['fname']),
                    "lname" => ucfirst($_POST['lname']),
                    "age" => $_POST['age'],
                    "city" => ucfirst($_POST['city']),
                    "street" => ucfirst($_POST['street'])
                ];
                foreach ($data as $value) {
                    if ($value == "") {
                        $check = false;
                    }
                }
                if ($check) {
                    array_push($_SESSION["allContent"], $data);
                    usort($_SESSION["allContent"], function ($a, $b) {
                        return $a["lname"] <=> $b["lname"];
                    });
                    $i = count($_SESSION['allContent']);
                    for ($q = 0; $q < $i; $q++) {
                        echo "<br>Osoba " . $q + 1 . ":<br><br>";
                        echo "Nazwisko: ";
                        print_r($_SESSION['allContent'][$q]['lname']);
                        echo "<br>";
                        echo "Imię: ";
                        print_r($_SESSION['allContent'][$q]['fname']);
                        echo "<br>";
                        echo "Wiek: ";
                        print_r($_SESSION['allContent'][$q]['age']);
                        echo "<br>";
                        echo "Miasto: ";
                        print_r($_SESSION['allContent'][$q]['city']);
                        echo "<br>";
                        echo "Ulica: ";
                        print_r($_SESSION['allContent'][$q]['street']);
                        echo "<br><br>";
                    }
                }
            }
            ?>
        </section>
    </body>

    </html>