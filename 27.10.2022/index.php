<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Karol Uciecha 4d - GIFy</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<head>
</head>
<body>
<div id="flex">
<div id="runningTime">
<script type="text/javascript">
$(document).ready(function() {
 setInterval(runningTime, 1000);
});
function runningTime() {
  $.ajax({
    url: 'timeScript.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>
</div>
<section id="baner">
<img src=<?php echo "GIPHY/".rand(1,20).".gif";
	header("refresh: 60");?>>
</section>
<header>
<br><h2>To jest nagłówek</h2>
</header>
<nav>
<br><h2>To jest menu</h2>
</nav>
<main>
<br><h2>A to jest miejsce na treść</h2>
</main>
</div>
</body>
</html>