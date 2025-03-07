<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $desiredName = $_POST["dbname"];
    $cookieName = "errDatadb";

    $con = new mysqli("localhost", "root", "", $desiredName);

    if ($con->connect_error) {
        setcookie($cookieName, "1", time() + 3600, "/");
        header("Location: data.php");
        exit();
    }

    // Check if necessary tables exist
    $checkTables = ["driver", "car"];
    $tablesExist = true;

    foreach ($checkTables as $table) {
        $tableExistsQuery = "SHOW TABLES LIKE '$table'";
        $result = $con->query($tableExistsQuery);
        if ($result->num_rows == 0) {
            $tablesExist = false;
            break;
        }
    }

    if (!$tablesExist) {
        setcookie($cookieName, "1", time() + 3600, "/");
        header("Location: data.php");
        exit();
    }

    // Retrieve driver count
    $stmt = $con->prepare("SELECT COUNT(id) AS id FROM driver");
    if (!$stmt) {
        setcookie($cookieName, "1", time() + 3600, "/");
        header("Location: data.php");
        exit();
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->fetch_assoc();
    $countnext = intval($count["id"]) + 1;

    if (!isset($_POST["exist"])) {
        $stmt = $con->prepare("INSERT INTO car (make, model, color, reg_no, driver_id) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            setcookie($cookieName, "1", time() + 3600, "/");
            header("Location: data.php");
            exit();
        }
        $stmt->bind_param("ssssi", $_POST['manufacturer'], $_POST['model'], $_POST['color'], $_POST['noreg'], $_POST['idos']);
    } else {
        $stmt1 = $con->prepare("INSERT INTO driver (fname, lname, street, house_no, city, zip_code) VALUES (?, ?, ?, ?, ?, ?)");
        if (!$stmt1) {
            setcookie($cookieName, "1", time() + 3600, "/");
            header("Location: data.php");
            exit();
        }
        $stmt1->bind_param("ssssss", $_POST['name'], $_POST['surname'], $_POST['street'], $_POST['nohouse'], $_POST['city'], $_POST['pcode']);
        $stmt1->execute();

        $stmt2 = $con->prepare("INSERT INTO car (make, model, color, reg_no, driver_id) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt2) {
            setcookie($cookieName, "1", time() + 3600, "/");
            header("Location: data.php");
            exit();
        }
        $stmt2->bind_param("ssssi", $_POST['manufacturer'], $_POST['model'], $_POST['color'], $_POST['noreg'], $countnext);
        $stmt2->execute();
    }

    $stmt->execute();
    $stmt->close();
    $con->close();

    setcookie($cookieName, "0", time() + 3600, "/");
    header("Location: data.php");
    exit();
}
?>