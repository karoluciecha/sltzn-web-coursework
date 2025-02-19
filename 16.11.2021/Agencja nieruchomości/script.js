function count() {
	let a = 4000*Number(document.getElementById('meters').value);
	a += 1000*Number(document.getElementById('digit').value);
	if (document.getElementById('bathroom').checked) {
		a += 2000;
	}
	document.getElementById('result').innerHTML = `Koszt mieszkania: ${a} zł.`;

}

const form = document.getElementById('formularz');
function handleForm(event) { event.preventDefault(); }
form.addEventListener('submit', handleForm);
document.getElementById('formularz').onsubmit = function () { count() };