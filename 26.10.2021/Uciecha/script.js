function add() {
	const a = Number(document.getElementById('liczbaA').value);
	const b = Number(document.getElementById('liczbaB').value);
	document.getElementById('result').innerHTML = `Wynik: ${a + b}`;
}
function substract() {
	const a = Number(document.getElementById('liczbaA').value);
	const b = Number(document.getElementById('liczbaB').value);
	document.getElementById('result').innerHTML = `Wynik: ${a - b}`;
}
function multiply() {
	const a = Number(document.getElementById('liczbaA').value);
	const b = Number(document.getElementById('liczbaB').value);
	document.getElementById('result').innerHTML = `Wynik: ${a * b}`;
}
function divide() {
	const a = Number(document.getElementById('liczbaA').value);
	const b = Number(document.getElementById('liczbaB').value);
	document.getElementById('result').innerHTML = `Wynik: ${a / b}`;
}
function power() {
	const a = Number(document.getElementById('liczbaA').value);
	const b = Number(document.getElementById('liczbaB').value);
	document.getElementById('result').innerHTML = `Wynik: ${Math.pow(a, b)}`;
}