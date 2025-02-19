function calculate() {
	let a = parseFloat(prompt("Wprowadź a: "));
	let b = parseFloat(prompt("Wprowadź b: "));
	let c = parseFloat(prompt("Wprowadź c: "));
	let d = parseFloat(prompt("Wprowadź d: "));
	let e, f;
	if (a < b) {
		e = b;
	}
	else {
		e = a;
	}
	if (c < d) {
		f = d;
	}
	else {
		f = c;
	}
	document.getElementById("result").innerHTML = `Największa liczba to: `;
	if (e < f) {
		document.getElementById("result").innerHTML += f;
	}
	else {
		document.getElementById("result").innerHTML += e;
	}
}
function currentTime() {
  let date = new Date(); 
  let hour = date.getHours();
  let min = date.getMinutes();
  let sec = date.getSeconds();
  let dayDigit = date.getDate();
  let year = date.getFullYear();
  let dayName;
  let month;

  switch (date.getDay()) {
  case 0:
    dayName = "Niedziela";
    break;
  case 1:
    dayName = "Poniedziałek";
    break;
  case 2:
     dayName = "Wtorek";
    break;
  case 3:
    dayName = "Środa";
    break;
  case 4:
    dayName = "Czwartek";
    break;
  case 5:
    dayName = "Piątek";
    break;
  case 6:
    dayName = "Sobota";
}
switch (date.getMonth()) {
  case 0:
    month = "Styczeń";
    break;
  case 1:
    month = "Luty";
    break;
  case 2:
     month = "Marzec";
    break;
  case 3:
    month = "Kwiecień";
    break;
  case 4:
    month = "Maj";
    break;
  case 5:
    month = "Czerwiec";
    break;
  case 6:
    month = "Lipiec";
	break;
  case 7:
    month = "Sierpień";
	break;
  case 8:
    month = "Wrzesień";
	break;
  case 9:
    month = "Październik";
	break;
  case 10:
    month = "Listopad";
	break;
  case 11:
    month = "Grudzień";
	break;
}
if (sec < 10) {
	sec = "0" + sec;
}
if (min < 10) {
	min = "0" + min;
}
if (hour < 10) {
	hour = "0" + hour;
}
	document.getElementById("date").innerHTML =`${dayDigit} ${month} ${year}r.`;
	document.getElementById("day").innerHTML =`${dayName}`;
	document.getElementById("time").innerHTML =`${hour} : ${min} : ${sec}`;
    let t = setTimeout(function(){ currentTime() }, 500);


}
currentTime();