<?php
session_set_cookie_params(0);
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileOne = $_FILES['fileOne']['name'];
    $fileTwo = $_FILES['fileTwo']['name'];
    $method = $_POST['hashMethods'];

    // Set cookies for files and methods
    setcookie('fileOne', $fileOne, time() + (86400 * 30), "/");
    setcookie('fileTwo', $fileTwo, time() + (86400 * 30), "/");
    setcookie('hashMethods', $method, time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>File hashing</title>
</head>

<body>
    <section id="forms">
        <form action="fileChecksum.php" method="POST" enctype="multipart/form-data">
            <br><br><label for="fileOne">First file: </label><br>
            <input type="file" id="fileOne" name="fileOne" value="<?php echo isset($_COOKIE['fileOne']) ? $_COOKIE['fileOne'] : ''; ?>"><br><br><br>
            <label for="fileTwo">Second File: </label><br>
            <input type="file" id="fileTwo" name="fileTwo" value="<?php echo isset($_COOKIE['fileTwo']) ? $_COOKIE['fileTwo'] : ''; ?>"><br><br><br>
            <label for="hashMethod">Hashing Method: </label><br>
            <select id="hashMethods" name="hashMethods">
                <option value="md2" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'md2') ? 'selected' : ''; ?>>md2</option>
                <option value="md4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'md4') ? 'selected' : ''; ?>>md4</option>
                <option value="md5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'md5') ? 'selected' : ''; ?>>md5</option>
                <option value="sha1" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha1') ? 'selected' : ''; ?>>sha1</option>
                <option value="sha224" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha224') ? 'selected' : ''; ?>>sha224</option>
                <option value="sha256" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha256') ? 'selected' : ''; ?>>sha256</option>
                <option value="sha384" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha384') ? 'selected' : ''; ?>>sha384</option>
                <option value="sha512/224" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha512/224') ? 'selected' : ''; ?>>sha512/224</option>
                <option value="sha512/256" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha512/256') ? 'selected' : ''; ?>>sha512/256</option>
                <option value="sha512" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha512') ? 'selected' : ''; ?>>sha512</option>
                <option value="sha3-224" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha3-224') ? 'selected' : ''; ?>>sha3-224</option>
                <option value="sha3-256" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha3-256') ? 'selected' : ''; ?>>sha3-256</option>
                <option value="sha3-384" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha3-384') ? 'selected' : ''; ?>>sha3-384</option>
                <option value="sha3-512" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'sha3-512') ? 'selected' : ''; ?>>sha3-512</option>
                <option value="ripemd128" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'ripemd128') ? 'selected' : ''; ?>>ripemd128</option>
                <option value="ripemd160" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'ripemd160') ? 'selected' : ''; ?>>ripemd160</option>
                <option value="ripemd256" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'ripemd256') ? 'selected' : ''; ?>>ripemd256</option>
                <option value="ripemd320" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'ripemd320') ? 'selected' : ''; ?>>ripemd320</option>
                <option value="whirlpool" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'whirlpool') ? 'selected' : ''; ?>>whirlpool</option>
                <option value="tiger128,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger128,3') ? 'selected' : ''; ?>>tiger128,3</option>
                <option value="tiger160,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger160,3') ? 'selected' : ''; ?>>tiger160,3</option>
                <option value="tiger192,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger192,3') ? 'selected' : ''; ?>>tiger192,3</option>
                <option value="tiger128,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger128,4') ? 'selected' : ''; ?>>tiger128,4</option>
                <option value="tiger160,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger160,4') ? 'selected' : ''; ?>>tiger160,4</option>
                <option value="tiger192,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'tiger192,4') ? 'selected' : ''; ?>>tiger192,4</option>
                <option value="snefru" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'snefru') ? 'selected' : ''; ?>>snefru</option>
                <option value="snefru256" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'snefru256') ? 'selected' : ''; ?>>snefru256</option>
                <option value="gost" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'gost') ? 'selected' : ''; ?>>gost</option>
                <option value="gost-crypto" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'gost-crypto') ? 'selected' : ''; ?>>gost-crypto</option>
                <option value="adler32" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'adler32') ? 'selected' : ''; ?>>adler32</option>
                <option value="crc32" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'crc32') ? 'selected' : ''; ?>>crc32</option>
                <option value="crc32b" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'crc32b') ? 'selected' : ''; ?>>crc32b</option>
                <option value="crc32c" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'crc32c') ? 'selected' : ''; ?>>crc32c</option>
                <option value="fnv132" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'fnv132') ? 'selected' : ''; ?>>fnv132</option>
                <option value="fnv1a32" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'fnv1a32') ? 'selected' : ''; ?>>fnv1a32</option>
                <option value="fnv164" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'fnv164') ? 'selected' : ''; ?>>fnv164</option>
                <option value="fnv1a64" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'fnv1a64') ? 'selected' : ''; ?>>fnv1a64</option>
                <option value="joaat" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'joaat') ? 'selected' : ''; ?>>joaat</option>
                <option value="murmur3a" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'murmur3a') ? 'selected' : ''; ?>>murmur3a</option>
                <option value="murmur3c" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'murmur3c') ? 'selected' : ''; ?>>murmur3c</option>
                <option value="murmur3f" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'murmur3f') ? 'selected' : ''; ?>>murmur3f</option>
                <option value="xxh32" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'xxh32') ? 'selected' : ''; ?>>xxh32</option>
                <option value="xxh64" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'xxh64') ? 'selected' : ''; ?>>xxh64</option>
                <option value="xxh3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'xxh3') ? 'selected' : ''; ?>>xxh3</option>
                <option value="xxh128" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'xxh128') ? 'selected' : ''; ?>>xxh128</option>
                <option value="haval128,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval128,3') ? 'selected' : ''; ?>>haval128,3</option>
                <option value="haval160,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval160,3') ? 'selected' : ''; ?>>haval160,3</option>
                <option value="haval192,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval192,3') ? 'selected' : ''; ?>>haval192,3</option>
                <option value="haval224,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval224,3') ? 'selected' : ''; ?>>haval224,3</option>
                <option value="haval256,3" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval256,3') ? 'selected' : ''; ?>>haval256,3</option>
                <option value="haval128,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval128,4') ? 'selected' : ''; ?>>haval128,4</option>
                <option value="haval160,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval160,4') ? 'selected' : ''; ?>>haval160,4</option>
                <option value="haval192,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval192,4') ? 'selected' : ''; ?>>haval192,4</option>
                <option value="haval224,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval224,4') ? 'selected' : ''; ?>>haval224,4</option>
                <option value="haval256,4" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval256,4') ? 'selected' : ''; ?>>haval256,4</option>
                <option value="haval128,5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval128,5') ? 'selected' : ''; ?>>haval128,5</option>
                <option value="haval160,5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval160,5') ? 'selected' : ''; ?>>haval160,5</option>
                <option value="haval192,5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval192,5') ? 'selected' : ''; ?>>haval192,5</option>
                <option value="haval224,5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval224,5') ? 'selected' : ''; ?>>haval224,5</option>
                <option value="haval256,5" <?php echo (isset($_COOKIE['hashMethods']) && $_COOKIE['hashMethods'] == 'haval256,5') ? 'selected' : ''; ?>>haval256,5</option>
                </select><br><br><br>
            <input type="submit" value="Compare">
        </form>
    </section>
    <section id="output">
    <?php
    // Hash the files
    if (isset($_FILES['fileOne']['tmp_name']) && isset($_FILES['fileTwo']['tmp_name'])) {
        try {
            // Check if file paths are valid (not empty)
            if (empty($_FILES['fileOne']['tmp_name']) || empty($_FILES['fileTwo']['tmp_name'])) {
                throw new Exception('Error: Both files must be selected before comparing.');
            }

            // Perform hashing if the file paths are not empty
            $hashFileOne = hash_file($method, $_FILES['fileOne']['tmp_name']);
            $hashFileTwo = hash_file($method, $_FILES['fileTwo']['tmp_name']);

            echo "<br>First file checksum: <br>" . $hashFileOne . '<br><br>';
            echo "<br>Second file checksum: <br>" . $hashFileTwo . '<br><br><br>';

            if ($hashFileOne == $hashFileTwo) {
                echo "<p class='resultPositive'>Files are identical.</p>";
            }
            else {
                echo "<p class='resultNegative'>Files are different.</p>";
            }
        } catch (Exception $e) {
            echo "<p class='resultNegative'>".$e->getMessage()."</p>";
        }
    }
    else {
        echo "<p class='resultNegative'>Error: Files not uploaded correctly.</p>";
    }
    ?>
    </section>
</body>
</html>