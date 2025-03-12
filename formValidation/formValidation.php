<?php
session_start(); // Start session to store timezone

// Check if timezone is sent via AJAX and save it in a session
if (isset($_POST['timezone'])) {
    $_SESSION['user_timezone'] = $_POST['timezone'];
    exit; // Stop execution after saving timezone
}

// If a session timezone exists, use it; otherwise, default to UTC
if (isset($_SESSION['user_timezone'])) {
    date_default_timezone_set($_SESSION['user_timezone']);
} else {
    date_default_timezone_set('UTC');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Karol Uciecha 4d</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='all'>
        <div id='header'>
            <div id='name'>
                <h1>Karol Uciecha</h1>
            </div>
            <div id='logo'>
                <img src='logo.png' alt='logo'>
            </div>
        </div>
        <div id='content'>
            <div id='form'>
                <form action="formValidation.php" method="POST">
                    <fieldset id="first">
                        <legend>Personal Data</legend>
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname"><br>
                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age"><br>
                    </fieldset>
                    <fieldset id="second">
                        <legend>Address</legend>
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city"><br>
                        <label for="pcode">Postal Code:</label>
                        <input type="text" id="pcode" name="pcode"><br>
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street"><br>
                    </fieldset>
                    <input type="submit" value="Submit">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fname = ucfirst($_POST['fname']);
                        $lname = ucfirst($_POST['lname']);
                        $age = $_POST['age'];
                        $city = ucfirst($_POST['city']);
                        $pcode = $_POST['pcode'];
                        $street = ucfirst($_POST['street']);
                        
                        if (empty($fname) || empty($lname) || empty($age) || empty($city) || empty($pcode) || empty($street)) {
                            echo "<p class='error'>Please fill in all the data.</p>";
                        } else {
                            if (!is_numeric($age) || $age <= 0 || $age > 120) {
                                echo "<p class='error'>Age must be a number between 1 and 120.</p>";
                            } else {
                                if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $pcode)) {
                                    echo "<p class='error'>Enter a valid postal code (00-000).</p>";
                                }
                            }
                        }
                    }
                    ?>
                </form>
            </div>
            <div id='tab'>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && is_numeric($age) && $age > 0 && $age <= 120) {
                    $fil = fopen('data.txt', 'w+');
                    $data = $fname . "\n" . $lname . "\n" . $age . "\n" . $city . "\n" . $pcode . "\n" . $street;
                    fwrite($fil, $data);
                    rewind($fil);
                    echo "<table>
                    <tr><td>First Name</td><td>" . fgets($fil) . "</td></tr>
                    <tr><td>Last Name</td><td>" . fgets($fil) . "</td></tr>
                    <tr><td>Age</td><td>" . fgets($fil) . "</td></tr>
                    <tr><td>City</td><td>" . fgets($fil) . "</td></tr>
                    <tr><td>Postal Code</td><td>" . fgets($fil) . "</td></tr>
                    <tr><td>Street</td><td>" . fgets($fil) . "</td></tr>
                    <caption>Client Data</caption>
                    </table>";
                    if (isset($fil) && is_resource($fil)) {
                        fclose($fil);
                    }
                }
                ?>
            </div>
        </div>
        <footer>
            <div id='source'>
                <?php echo "<p>The open file is: " . basename(__FILE__) . "</p>"; ?>
            </div>
            <div id='time'>
                <?php
                echo "<p>Today is " . date("l, d F Y") . ", time " . date("H:i:s") . "</p>";
                ?>
            </div>
        </footer>
    </div>
</body>
<script>
    // Detect user's timezone
    const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

    // Check if the timezone is already stored in session via PHP
    fetch("check_session.php")
    .then(response => response.text())
    .then(savedTimezone => {
        if (savedTimezone !== userTimezone) {
            // Send timezone to PHP using AJAX
            fetch(window.location.href, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "timezone=" + encodeURIComponent(userTimezone)
            }).then(() => location.reload()); // Reload after setting session
        }
    });
</script>
</html>
