debugger;

function division() {
let liczba1 = prompt(`Podaj dolną granicę zakresu liczbowego: `);
let liczba2 = prompt(`Podaj górną granicę zakresu liczbowego: `);
let liczba3 = prompt(`Podaj niedzielnik: `);

let a = parseFloat(liczba1);
let b = parseFloat(liczba2);
let c = parseFloat(liczba3);

while(c == 0) {
	liczba3 = prompt(`Nie można dzielić przez 0! Wprowadź inną liczbę:`);
	c = parseFloat(liczba3);
}
if(b < a) {
	let d = a;
	a = b;
	b = d;
}
document.getElementById("digits").innerHTML = `Twoje liczby to: A = ${a}, B = ${b} i C = ${c}.`;
document.getElementById("text").innerHTML = `Wyniki niedzielenia to:`;
for(i = a; i <= b; i++) {
	if(i%c != 0){
		document.getElementById("result").innerHTML += `${i}`;
	}
	if(i < b && i%c != 0) {
		document.getElementById("result").innerHTML += `, `;
	}
	else if(i == b) {
		document.getElementById("result").innerHTML += `.`;
	}
}
}