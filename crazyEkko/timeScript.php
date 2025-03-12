<?php
session_start();

// Use the stored timezone, or fallback to UTC
if (isset($_SESSION['user_timezone'])) {
    date_default_timezone_set($_SESSION['user_timezone']);
} else {
    date_default_timezone_set('UTC');
}

// Get the day of the month
$day = date("j"); // Returns day without leading zeros
$dayWithSuffix = $day . getOrdinalSuffix($day);

// Function to determine ordinal suffix
function getOrdinalSuffix($num) {
    if (!in_array(($num % 100), [11, 12, 13])) {
        switch ($num % 10) {
            case 1: return "st";
            case 2: return "nd";
            case 3: return "rd";
        }
    }
    return "th";
}

echo "<h1 class='gifText'>Today is " . date("l, ") . $dayWithSuffix . date(" F Y") . ", time " . date("H:i:s") . "</h1>";
?>

