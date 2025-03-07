<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Generate random lottery numbers for Lotto and EuroJackpot.">
    <meta name="author" content="Karol Uciecha">
    <title>Lottery Number Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="grad">

    <section id="all">
        <!-- Header -->
        <section id="top">
            <img src="gifOne.gif" alt="Lottery Banner">
        </section>

        <?php
        // Function to generate unique random numbers
        function generateUniqueNumbers($count, $max) {
            $numbers = [];
            while (count($numbers) < $count) {
                $num = rand(1, $max);
                if (!in_array($num, $numbers)) {
                    $numbers[] = $num;
                }
            }
            sort($numbers); // Sorting for better readability
            return $numbers;
        }

        $lottoNumbers = $eurojackpotNumbers = $eurojackpotBonus = [];

        // Handle Lotto Draw
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lotto'])) {
            $lottoNumbers = generateUniqueNumbers(6, 49);
        }

        // Handle EuroJackpot Draw
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['eurojackpot'])) {
            $eurojackpotNumbers = generateUniqueNumbers(5, 50);
            $eurojackpotBonus = generateUniqueNumbers(2, 10);
        }
        ?>
		<div class="lottery-container">
        <!-- Lotto Section -->
        <section id="lotto" class="lottery-section">
            <img src="lotto.gif" alt="Lotto Logo">
            <h2>Lotto Number Generator</h2>
            <form action="" method="POST">
                <input type="submit" name="lotto" value="Play Lotto">
            </form>
            <?php if (!empty($lottoNumbers)): ?>
                <p>Your Lotto numbers are: <?= implode(", ", $lottoNumbers); ?>.</p>
            <?php endif; ?>
        </section>

        <!-- EuroJackpot Section -->
        <section id="euroJackpot" class="lottery-section">
            <img src="eurojackpot.gif" alt="EuroJackpot Logo">
            <h2>EuroJackpot Number Generator</h2>
            <form action="" method="GET">
                <input type="submit" name="eurojackpot" value="Play EuroJackpot">
            </form>
            <?php if (!empty($eurojackpotNumbers) && !empty($eurojackpotBonus)): ?>
                <p>Your 5 numbers from 50 are: <?= implode(", ", $eurojackpotNumbers); ?>.</p>
                <p>Your 2 numbers from 10 are: <?= implode(", ", $eurojackpotBonus); ?>.</p>
            <?php endif; ?>
        </section>
		</div>
        <!-- Footer -->
        <footer>
            <img src="gifTwo.gif" alt="Lottery Footer">
            <p>&copy; <?= date("Y"); ?> Lottery Number Generator. All rights reserved.</p>
        </footer>

    </section>

</body>
</html>
