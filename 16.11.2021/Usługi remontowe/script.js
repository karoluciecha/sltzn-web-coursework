function count() {
	const a = Number(document.getElementById('f').value);
	const b = Number(document.getElementById('s').value);
	let w1 = 2*(a*2.7);
	let w2 = 2*(b*2.7);
	document.getElementById('result1').innerHTML = `Powierzchnia całkowita ścian: ${w1 + w2}.`;
	document.getElementById('result2').innerHTML = `Koszt malowania: ${(w1 + w2) * 8} zł.`;

}

document.getElementById('count').onclick = function () { count() };