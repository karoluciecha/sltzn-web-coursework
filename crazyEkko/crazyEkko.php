<?php
session_start();

// Set timezone from session or default to UTC
if (isset($_SESSION['user_timezone'])) {
    date_default_timezone_set($_SESSION['user_timezone']);
} else {
    date_default_timezone_set('UTC');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='style.css'>
    <title>The "this" Method</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class='wrapper'>
        <div>
            <h1 class="ekkoText" onclick="this.innerHTML='Now there is a storm<br>&#127785;&#9748;&#127785;'; this.style.color='blue';"
                ondblclick="this.innerHTML='The sun is shining now<br>☀️&#127780;🥵'; this.style.color='orange';"
                onmouseout="this.innerHTML='This is an umbrella<br>☂️'; this.style.color='black';">
                This is an umbrella<br>☂️</h1>
        </div>
        <div>
            <img class="ekko" 
                onmouseenter="this.src='Pulsefire_Ekko.webp'; this.style.transition='all 0.5s ease-in-out'; this.style.transform='rotate(360deg) scale(1.2)'; this.style.boxShadow='0 0 40px cyan';"
                onmouseleave="this.src='Ekko.webp'; this.style.transition='all 0.5s ease-in-out'; this.style.transform='rotate(0deg) scale(1)'; this.style.boxShadow='0 0 20px red';"
                src='Ekko.webp'>
            <h3 ondrag="this.style.display='none';">Hover over Ekko to give him a skin</h3>
        </div>
    </div>
    <div class="wrapper">
        <!-- Time Display Section -->
        <div id="runningTime"></div>
        <br>
        <!-- GIF Section (Without Page Refresh) -->
        <div>
            <img id="randomGif" src="GIPHY/<?php echo rand(1,20); ?>.gif"
            onmouseenter="this.style.transition='all 0.5s ease-in-out'; this.style.boxShadow='0 0 40px cyan';"
            onmouseleave="this.style.transition='all 0.5s ease-in-out'; this.style.boxShadow='0 0 20px red';">
        </div>
    </div>

<script>
    // Function to update running time every second
    function updateTime() {
        $.ajax({
            url: 'timeScript.php',
            success: function(data) {
                $('#runningTime').html(data);
            },
        });
    }

    // Function to reload GIF dynamically
    function reloadGif() {
        document.getElementById("randomGif").src = "GIPHY/" + Math.floor(Math.random() * 20 + 1) + ".gif";
    }

    $(document).ready(function() {
        updateTime(); // Initial call
        setInterval(updateTime, 1000); // Update time every second
        setInterval(reloadGif, 10000); // Reload GIF every 10 seconds (without refreshing the page)
    });
</script>

</body>
</html>