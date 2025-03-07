<!DOCTYPE html>
<html>
    
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cookie People List</title>
</head>

<body>
    <section id="forms">
        <form action="" method="POST">
            <br><label for="fname">First name: </label>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Last name: </label>
            <input type="text" id="lname" name="lname" required><br>
            <label for="age">Age: </label>
            <input type="number" id="age" name="age" min="1" max="130" required><br>
            <label for="city">City: </label>
            <input type="text" id="city" name="city" required><br>
            <label for="street">Street: </label>
            <input type="text" id="street" name="street" required><br>
            <input type="submit" value="Send">
        </form>
    </section>

    <section id="output">
        <?php
        session_set_cookie_params(86400); // 1-day session lifespan
        session_start();

        if (!isset($_SESSION["allContent"])) {
            $_SESSION["allContent"] = [];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                "fname" => ucfirst(trim($_POST['fname'])),
                "lname" => ucfirst(trim($_POST['lname'])),
                "age" => filter_var($_POST['age'], FILTER_VALIDATE_INT),
                "city" => ucfirst(trim($_POST['city'])),
                "street" => ucfirst(trim($_POST['street']))
            ];

            // Check if any field is empty or invalid
            if (in_array("", $data, true) || !$data["age"]) {
                echo "<p style='color:red;'>All fields are required. Age must be a number</p>";
            } else {
                $_SESSION["allContent"][] = $data;

                // Sort by last name
                usort($_SESSION["allContent"], fn($a, $b) => $a["lname"] <=> $b["lname"]);

                // Redirect to prevent form resubmission
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }
        }

        // Display stored data
        echo '<div class="people-container">';
        foreach ($_SESSION["allContent"] as $index => $person) {
            echo '<div class="person-card">';
            echo "<strong>Person " . ($index + 1) . ":</strong><br>";
            echo "Last name: " . htmlspecialchars($person['lname']) . "<br>";
            echo "First name: " . htmlspecialchars($person['fname']) . "<br>";
            echo "Age: " . htmlspecialchars($person['age']) . "<br>";
            echo "City: " . htmlspecialchars($person['city']) . "<br>";
            echo "Street: " . htmlspecialchars($person['street']) . "<br>";
            echo "</div>";
        }
        echo '</div>';
        
        ?>
    </section>
</body>
</html>