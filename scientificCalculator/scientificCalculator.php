<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Scientific Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$res = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['res'])) { // Reset
        $res = '';
    }

    if (isset($_POST['sub2'])) { // PI
        $res = pi();
    }

    if (isset($_POST['sub'])) {
        $txt1 = $_POST['n1'] ?? '';
        $oprnd = $_POST['sub'];

        if ($txt1 !== '') {
            if (!is_numeric($txt1)) {
                $res = 'Error. Please enter a valid number.';
            } else {
                $txt1 = floatval($txt1);
                switch ($oprnd) {
                    case "sine":
                        $res = sin(deg2rad($txt1));
                        break;
                    case "cosine":
                        $res = cos(deg2rad($txt1));
                        break;
                    case "tangent":
                        $res = tan(deg2rad($txt1));
                        break;
                    case "e":
                        $res = exp($txt1);
                        break;
                    case "logarithm":
                        $res = ($txt1 > 0) ? log($txt1) : "Error. Logarithm is only for numbers > 0.";
                        break;
                    case "square root":
                        $res = ($txt1 >= 0) ? sqrt($txt1) : "Error. Square root is only for numbers ≥ 0.";
                        break;
                    case "factorial":
                        if ($txt1 < 0 || floor($txt1) != $txt1) {
                            $res = "Error. Factorial is only for non-negative integers.";
                        } else {
                            $factorial = 1;
                            for ($i = 1; $i <= $txt1; $i++) {
                                $factorial *= $i;
                            }
                            $res = $factorial;
                        }
                        break;
                }
            }
        } else {
            $res = 'Error. No number entered.';
        }
    }

    if (isset($_POST['sub3'])) {
        $txt1 = $_POST['n1'] ?? '';
        $txt2 = $_POST['n2'] ?? '';
        $oprnd = $_POST['sub3'];

        if ($txt1 !== '' && $txt2 !== '') {
            if (!is_numeric($txt1) || !is_numeric($txt2)) {
                $res = 'Error. Please enter valid numbers.';
            } else {
                $txt1 = floatval($txt1);
                $txt2 = floatval($txt2);

                switch ($oprnd) {
                    case "+":
                        $res = $txt1 + $txt2;
                        break;
                    case "-":
                        $res = $txt1 - $txt2;
                        break;
                    case "x":
                        $res = $txt1 * $txt2;
                        break;
                    case "/":
                        $res = ($txt2 != 0) ? $txt1 / $txt2 : "Error. Division by zero.";
                        break;
                    case "power":
                        $res = pow($txt1, $txt2);
                        break;
                    case "max":
                        $res = max($txt1, $txt2);
                        break;
                    case "min":
                        $res = min($txt1, $txt2);
                        break;
                }
            }
        } else {
            $res = 'Error. This operation requires two numbers.';
        }
    }
}
?>
<body>
    <div class="container">
        <form method="post" action="scientificCalculator.php">
            <h1>SCIENTIFIC CALCULATOR</h1><br>
            <label for="n1">First number: </label>
            <input name="n1" value=""><br>
            <label for="n2">Second number: </label>
            <input name="n2" value=""><br>
            <input type="submit" name="sub3" value="+">
            <input type="submit" name="sub3" value="-">
            <input type="submit" name="sub3" value="x">
            <input type="submit" name="sub3" value="/">
            <br>
            <input type="submit" name="sub" value="sine">
            <input type="submit" name="sub" value="cosine">
            <input type="submit" name="sub" value="tangent">
            <input type="submit" name="sub" value="e">
            <br>
            <input type="submit" name="sub" value="logarithm">
            <input type="submit" name="sub2" value="pi">
            <input type="submit" name="sub3" value="power">
            <input type="submit" name="sub" value="square root">
            <br>
            <input type="submit" name="sub" value="factorial">
            <input type="submit" name="sub3" value="max">
            <input type="submit" name="sub3" value="min"><br>
            <label for="result">Result: </label>
            <input type='text' name="result" value="<?php echo htmlspecialchars($res); ?>"><br>
            <input type="submit" name="res" value="Reset">
        </form>
    </div>
    <p class='cp'> &copy; <?php echo date("Y"); ?> Karol Uciecha</p>
</body>
</html>