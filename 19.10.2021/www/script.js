
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