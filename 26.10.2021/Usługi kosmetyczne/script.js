function price() {
	const a = document.getElementById('piling').checked;
	const b = document.getElementById('maska').checked;
	const c = document.getElementById('twarz').checked;
	const d = document.getElementById('brwi').checked;
	document.getElementById('result').innerHTML = `Cena zabiegów: ${(a ? 45 : 0) + (b ? 30 : 0) + (c ? 20 : 0) + (d ? 5 : 0)} zł`;
}