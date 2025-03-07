<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Vehicle Registration</title>
	<script type="text/javascript">
		function validateForm() {
		let manufacturer = document.forms["adding"]["manufacturer"].value;
		manufacturer = manufacturer.trim();
		manufacturer = manufacturer.toLowerCase();
		manufacturer = manufacturer.charAt(0).toUpperCase() + manufacturer.slice(1);
		document.getElementById("manufacturer").value = manufacturer;
		let model = document.forms["adding"]["model"].value;
		model = model.trim();
		model = model.toLowerCase();
		model = model.charAt(0).toUpperCase() + model.slice(1);
		document.getElementById("model").value = model;
		let color = document.forms["adding"]["color"].value;
		color = color.trim();
		color = color.toLowerCase();
		document.getElementById("color").value = color;
		let noreg = document.forms["adding"]["noreg"].value;
		noreg = noreg.trim();
		noreg = noreg.toUpperCase();
		let patternnoreg = /^\D{2,3}\s{1}\S{3,5}$/;
		if (!patternnoreg.test(noreg)) {
			document.getElementById("err1").innerHTML = "Wprowadzono błędny numer rejestracyjny.";
			return false;
		}
		else {
			document.getElementById("err1").innerHTML = "";
			document.getElementById("noreg").value = noreg;

		}
		let name = document.forms["adding"]["name"].value;
		name = name.trim();
		name = name.toLowerCase();
		name = name.charAt(0).toUpperCase() + name.slice(1);
		document.getElementById("name").value = name;
		let surname = document.forms["adding"]["surname"].value;
		surname = surname.trim();
		surname = surname.toLowerCase();
		surname = surname.charAt(0).toUpperCase() + surname.slice(1);
		document.getElementById("surname").value = surname;
		let street = document.forms["adding"]["street"].value;
		street = street.trim();
		street = street.toLowerCase();
		street = street.charAt(0).toUpperCase() + street.slice(1);
		document.getElementById("street").value = street;
		let nohouse = document.forms["adding"]["nohouse"].value;
		nohouse = nohouse.trim();
		nohouse = nohouse.toLowerCase();
		let patternnohouse = /^\d+\D*$/;
		if (nohouse != "") {
			if (!patternnohouse.test(nohouse)) {
			document.getElementById("err2").innerHTML = "Wprowadzono błędny numer domu.";
			return false;
		}
		}
		else {
			document.getElementById("err2").innerHTML = "";
			document.getElementById("nohouse").value = nohouse;
		}
		let city = document.forms["adding"]["city"].value;
		city = city.trim();
		city = city.toLowerCase();
		let cityarr = city.split(" ");
		for (let i = 0; i < cityarr.length; i++) {
    		cityarr[i] = cityarr[i].charAt(0).toUpperCase() + cityarr[i].slice(1);
		}
		city = cityarr.join(" ");
		document.getElementById("city").value = city;
		let pcode = document.forms["adding"]["pcode"].value;
		pcode = pcode.trim();
		let patternpcode = /^\d{2}-\d{3}$/;
		if (pcode != "") {
			if (!patternpcode.test(pcode)) {
			document.getElementById("err3").innerHTML = "Wprowadzono błędny kod pocztowy.";
			return false;
		}
		}
		else {
			document.getElementById("err3").innerHTML = "";
			document.getElementById("pcode").value = pcode;
		}
			return true;
		}
</script>
</head>
<body>
<nav>
	<ul>
		<a href="vehicleDriverDatabase.php"><li>Database Creation</li></a>
		<a href="delete.php"><li>Delete Database</li></a>
		<a href="data.php"><li>Vehicle Registration</li></a>
		<a href="show.php"><li>View Database</li></a>
	</ul>
</nav>
<main>
	<h1>Vehicle Registration</h1>
	<form id="adding" method="POST" action="datadb.php" onsubmit="return validateForm()">
		<label for="dbname">Select a database:</label><br>
		<select id="dbname" name="dbname" required>
		<option value=""></option>
		<?php
			$con = mysqli_connect("localhost","root","");
			$result = mysqli_query($con,"SHOW DATABASES"); 
			while ($row = mysqli_fetch_array($result)) { 
				echo '<option value="' . $row[0] . '">' . $row[0] . '</option>'; 
			}
		?>
		</select><br>
		<div class="fieldwrapper">
			<div class="pt1">
				<label for="manufacturer">Make:</label><br>
				<input class="text" type="text" id="manufacturer" name="manufacturer" required>
				<p></p>
				<label for="model">Model:</label><br>
				<input class="text" type="text" id="model" name="model" required>
				<p></p>
				<label for="color">Color:</label><br>
				<input class="text" type="text" id="color" name="color" required>
				<p></p>
				<label for="noreg">Registration number:</label><br>
				<input class="text" type="text" id="noreg" name="noreg" required>
				<p id="err1"></p>
				<input type="checkbox" id="exist" name="exist" value="exist" checked>
				<label for="exist">Do you want to add a driver?</label><br><br>
				<div id="extra">
				<label for="idos">Driver ID:</label><br>
				<input type="number" id="idos" name="idos">
				</div>
			</div>
			<div class="pt2" id="pt2">
				<label for="name">First name:</label><br>
				<input class="text" type="text" id="name" name="name">
				<p></p>
				<label for="surname">Last name:</label><br>
				<input class="text" type="text" id="surname" name="surname">
				<p></p>
				<label for="street">Street:</label><br>
				<input class="text" type="text" id="street" name="street">
				<p></p>
				<label for="nohouse">House number:</label><br>
				<input class="text" type="text" id="nohouse" name="nohouse">
				<p id="err2"></p>
				<label for="city">City:</label><br>
				<input class="text" type="text" id="city" name="city">
				<p></p>
				<label for="pcode">ZIP Code:</label><br>
				<input class="text" type="text" id="pcode" name="pcode">
				<p id="err3"></p>
			</div>
		</div>
		<?php
		if (isset($_COOKIE["errDatadb"])) {
			if ($_COOKIE["errDatadb"] == "1") {
				echo "<p id='err'>Error: Data could not be added.</p>";
			} elseif ($_COOKIE["errDatadb"] == "0") {
				echo "<p id='suc'>Data added successfully.</p>";
			}
		}
		?>
	<br><button type="submit">Register your vehicle now</button><br>

</form>
</main>
	<script type="text/javascript">
		const checkbox = document.querySelector("input[name=exist]");
		checkbox.addEventListener("change", (e) => {
		if (e.target.checked) {
			document.getElementById("pt2").style.display = "block";
			document.getElementById("extra").style.display = "none";
		}
		else {
			document.getElementById("pt2").style.display = "none";
			document.getElementById("extra").style.display = "block";
		}});
	</script>
</body>
</html>