function lotto() {
	let a, b, c, d, e, f;
	a = Math.floor((Math.random() * 49) + 1);
	b = Math.floor((Math.random() * 49) + 1);
	if (b == a) b++;
	c = Math.floor((Math.random() * 49) + 1);
	for (let i = c; i == a || i == b; i++) c++;
	d = Math.floor((Math.random() * 49) + 1);
	for (let i = d; i == a || i == b || i == c; i++) d++;
	e = Math.floor((Math.random() * 49) + 1);
	for (let i = e; i == a || i == b || i == c || i == d; i++) e++;
	f = Math.floor((Math.random() * 49) + 1);
	for (let i = f; i == a || i == b || i == c || i == d || i == e; i++) f++;
	document.getElementById("digits1").innerHTML = "Twoje liczby to: " + a + ", " + b + ", " + c + ", " + d + ", " + e + ", " + f + ".";
	}
function eurojackpot() {
	let a, b, c, d, e, f, g;
	a = Math.floor((Math.random() * 50) + 1);
	b = Math.floor((Math.random() * 50) + 1);
	if (b == a) b++;
	c = Math.floor((Math.random() * 50) + 1);
	for (let i = c; i == a || i == b; i++) c++;
	d = Math.floor((Math.random() * 50) + 1);
	for (let i = d; i == a || i == b || i == c; i++) d++;
	e = Math.floor((Math.random() * 50) + 1);
	for (let i = e; i == a || i == b || i == c || i == d; i++) e++;
	f = Math.floor((Math.random() * 10) + 1);
	g = Math.floor((Math.random() * 10) + 1);
	if (g == f) {
		g++;
		if (g >= 10) {
		g -= 2;
		}
	}
	document.getElementById("digits2").innerHTML = "Twoje 5 liczb z 50 to: " + a + ", " + b + ", " + c + ", " + d + ", " + e + ".<br>Twoje 2 liczby z 10 to: " + f + ", "+ g + ".";
}

function quadraticEquation() {
let liczba1 = prompt("Podaj współczynnik a: ");
let liczba2 = prompt("Podaj współczynnik b: ");
let liczba3 = prompt("Podaj współczynnik c: ");

let a = parseFloat(liczba1);
let b = parseFloat(liczba2);
let c = parseFloat(liczba3);

switch(a) {
  case 0:
	document.getElementById("result").innerHTML = "To nie jest równanie kwadratowe.";
	break;
  default:
  let delta = b * b - 4 * a * c;
  let  p = Math.sqrt(delta);
  if (delta == 0) {
  let wynik = - b / ( 2 * a);
  document.getElementById("result").innerHTML = "Równanie ma jedno rozwiązanie, wynosi: " + wynik + ".";
  }
 if (delta > 0) {
  let x1 = (- b - p) / (2 * a);
  let x2 = (- b + p) / (2 * a);
  document.getElementById("result").innerHTML = "Równanie ma dwa rozwiązania, pierwsze wynosi: " + x1 + ", a drugie: " + x2 + ".";
}
else {
  document.getElementById("result").innerHTML = "Delta jest ujemna, równanie nie ma rozwiązań!";
  }
}
}