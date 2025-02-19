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
                <br><br><label for="fileOne">Pierwszy plik: </label><br>
                <input type="file" id="fileOne" name="fileOne"><br><br><br>
                <label for="fileTwo">Drugi plik: </label><br>
                <input type="file" id="fileTwo" name="fileTwo"><br><br><br>
                <label for="hashMethod">Metoda hashowania: </label><br>
                <input list="methods" id="hashMethods" name="hashMethods"><br><br><br>
                <datalist id="methods">
                    <option value="md2">
                    <option value="md4">
                    <option value="md5">
                    <option value="sha1">
                    <option value="sha224">
                    <option value="sha256">
                    <option value="sha384">
                    <option value="sha512/224">
                    <option value="sha512/256">
                    <option value="sha512">
                    <option value="sha3-224">
                    <option value="sha3-256">
                    <option value="sha3-384">
                    <option value="sha3-512">
                    <option value="ripemd128">
                    <option value="ripemd160">
                    <option value="ripemd256">
                    <option value="ripemd320">
                    <option value="whirlpool">
                    <option value="tiger128,3">
                    <option value="tiger160,3">
                    <option value="tiger192,3">
                    <option value="tiger128,4">
                    <option value="tiger160,4">
                    <option value="tiger192,4">
                    <option value="snefru">
                    <option value="snefru256">
                    <option value="gost">
                    <option value="gost-crypto">
                    <option value="adler32">
                    <option value="crc32">
                    <option value="crc32b">
                    <option value="crc32c">
                    <option value="fnv132">
                    <option value="fnv1a32">
                    <option value="fnv164">
                    <option value="fnv1a64">
                    <option value="joaat">
                    <option value="murmur3a">
                    <option value="murmur3c">
                    <option value="murmur3f">
                    <option value="xxh32">
                    <option value="xxh64">
                    <option value="xxh3">
                    <option value="xxh128">
                    <option value="haval128,3">
                    <option value="haval160,3">
                    <option value="haval192,3">
                    <option value="haval224,3">
                    <option value="haval256,3">
                    <option value="haval128,4">
                    <option value="haval160,4">
                    <option value="haval192,4">
                    <option value="haval224,4">
                    <option value="haval256,4">
                    <option value="haval128,5">
                    <option value="haval160,5">
                    <option value="haval192,5">
                    <option value="haval224,5">
                    <option value="haval256,5">
                </datalist>
                <input type="submit" value="Sprawdź">
            </form>
        </section>
        <section id="output">
            <?php
            session_set_cookie_params(0);
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fileOne = $_POST['fileOne'];
                $fileTwo = $_POST['fileTwo'];
                $method = $_POST['hashMethods'];
                $hashFileOne = hash_file($method, $fileOne);
                $hashFileTwo = hash_file($method, $fileTwo);
                echo "<br>Suma kontrolna pierwszego pliku: <br>" . $hashFileOne . '<br><br>';
                echo "<br>Suma kontrolna drugiego pliku: <br>" . $hashFileTwo . '<br><br><br>';
                if ($hashFileOne == $hashFileTwo) {
                    echo "<p class='resultPositive'>Pliki są takie same.</p>";
                } else {
                    echo "<p class='resultNegative'>Pliki są inne.</p>";
                }
            }
            ?>
        </section>
    </body>

    </html>