function sltzn() {
	document.getElementById('drugi').style.backgroundColor = 'Orange';
	document.getElementById('drugi').style.float = 'right';
	document.getElementById('drugi').style.padding = '200px';
	document.getElementById('drugi').style.color = 'Red';
	document.getElementById('drugi').style.fontSize = '1.5em';
	document.getElementById('sltzn').innerHTML = 'Śląskie Techniczne Zakłady Naukowe';
	document.getElementById('drugi').style.border = '5px dashed brown';
}
function rollback() {
	document.getElementById('drugi').style.backgroundColor = 'White';
	document.getElementById('drugi').style.float = 'left';
	document.getElementById('drugi').style.padding = '0';
	document.getElementById('drugi').style.color = 'Black';
	document.getElementById('drugi').style.fontSize = '1em';
	document.getElementById('sltzn').innerHTML = 'Śl.TZN';
	document.getElementById('drugi').style.border = 'none';
}

function mouseOver() {
	document.getElementById('logo').style.width = '50%';
	document.getElementById('logo').style.height = '50%';
}

function mouseOut() {
	document.getElementById('logo').style.width = '227px';
	document.getElementById('logo').style.height = '250px';
}

document.getElementById("logo").onmouseover = function() {mouseOver()};
document.getElementById("logo").onmouseout = function() {mouseOut()};
document.getElementById("drugi").onclick = function() {sltzn()};
document.getElementById("drugi").ondblclick = function() {rollback()};

function price() {
	const a = document.getElementById('piling').checked;
	const b = document.getElementById('maska').checked;
	const c = document.getElementById('twarz').checked;
	const d = document.getElementById('brwi').checked;
	document.getElementById('result').innerHTML = `Cena zabiegów: ${(a == true ? 45 : 0) + (b == true ? 30 : 0) + (c == true ? 20 : 0) + (d == true ? 5 : 0)} zł`;
}
function pageTitle() {
    document.title = 'Szkoła ponadgimnazjalna';
}
function fontColor() {
	document.body.style.color = 'FireBrick';
}
function backgroundColor() {
	document.getElementById('baner').style.backgroundColor = 'DarkGoldenRod';
	document.getElementById('panel_lewy').style.backgroundColor = 'DarkGoldenRod';
	document.getElementById('panel_prawy').style.backgroundColor = 'DarkGoldenRod';
	document.getElementById('foot').style.backgroundColor = 'GoldenRod';
}
function dateLM() {
	const data = document.lastModified;
	document.getElementById('dLM').innerHTML = data;
}
function numberElements() {
	const numberOfElements = Number(document.getElementsByTagName('td').length);
	document.getElementById('nOE').innerHTML = `Ilość elementów td na stronie: ${numberOfElements}`;
}
function showAll() {
	document.getElementById('panel_srodkowy').style.height = 'auto';
	document.body.style.backgroundColor = '#ffcb71';
}