'use strict';

function fuel(dystans, spalanie) {
	let litry = parseInt(spalanie / 100 * dystans);
	document.getElementsByClassName('result')[0].innerHTML = 'Potrzebujesz: ' + litry + ' litrów paliwa';
}