function odkryj(a) {
	attempt++;
	document.getElementById(a).style.background = "rgba(0,0,0,0)";
	if (a == `a${prize}a`) {
		document.getElementById(`a${prize}a`).innerHTML += `<img src='logo.png' id='logo'></img>`;
		document.getElementById(`logo`).style.width = '100%';
		document.getElementById(`logo`).style.height = '100%';
		let div = document.createElement("div");
		div.id = `end`;
		div.style.width = '100%';
		div.style.height = '25%';
		div.style.background = "blue";
		div.style.position = 'absolute';
		div.innerHTML = `<br><h1>Zwycięstwo! Liczba prób: ${attempt}/${divId}.</h1><br><h1>Gratulacje!</h1>`;
		div.style.textAlign = 'center';
		div.style.color = 'white';
		div.style.top = '50%';
		div.style.left = '50%';
		div.style.transform = 'translate(-50%, -50%)';
		document.getElementById("main").appendChild(div);
	}
}
function mainFunction() {
	let licz = Number(document.getElementById('count').value);
	const zniknij = document.getElementById("poczatek");
	zniknij.remove();
	let a = 100 / licz;
	if (licz % 2 == 0) {
		for (let i = 1; i <= licz; i++) {
			for (let i = 1; i <= licz; i++) {
				if (i % 2 == 0) {
					let div = document.createElement("div");
					div.id = `a${divId}a`;
					div.style.width = a + '%';
					div.style.height = a + '%';
					div.style.background = "red";
					div.style.float = "left";
					div.onclick = function () { odkryj(div.id) };
					document.getElementById("main").appendChild(div);
					divId++;
				}
				else {
					let div = document.createElement("div");
					div.id = `a${divId}a`;
					div.style.width = a + '%';
					div.style.height = a + '%';
					div.style.background = "green";
					div.style.float = "left";
					div.onclick = function () { odkryj(div.id) };
					document.getElementById("main").appendChild(div);
					divId++;
				}
			}
			if (licz % 2 == 0) {
				for (let i = 1; i <= licz; i++) {
					if (i % 2 == 0) {
						let div = document.createElement("div");
						div.id = `a${divId}a`;
						div.style.width = a + '%';
						div.style.height = a + '%';
						div.style.background = "green";
						div.style.float = "left";
						div.onclick = function () { odkryj(div.id) };
						document.getElementById("main").appendChild(div);
						divId++;
					}
					else {
						let div = document.createElement("div");
						div.id = `a${divId}a`;
						div.style.width = a + '%';
						div.style.height = a + '%';
						div.style.background = "red";
						div.style.float = "left";
						div.onclick = function () { odkryj(div.id) };
						document.getElementById("main").appendChild(div);
						divId++;
					}

				}
				i++;
			}
		}
	}
	else {
		for (let i = 1; i <= licz * licz; i++) {
			if (i % 2 == 0) {
				let div = document.createElement("div");
				div.id = `a${divId}a`;
				div.style.width = a + '%';
				div.style.height = a + '%';
				div.style.background = "red";
				div.style.float = "left";
				div.onclick = function () { odkryj(div.id) };
				document.getElementById("main").appendChild(div);
				divId++;
			}
			else {
				let div = document.createElement("div");
				div.id = `a${divId}a`;
				div.style.width = a + '%';
				div.style.height = a + '%';
				div.style.background = "green";
				div.style.float = "left";
				div.onclick = function () { odkryj(div.id) };
				document.getElementById("main").appendChild(div);
				divId++;
			}
		}
	}
	prize = Math.floor(Math.random() * (licz * licz));
}
let prize = 0;
let attempt = 0;
let divId = 0;
const form = document.getElementById('formularz');
function handleForm(event) { event.preventDefault(); }
form.addEventListener('submit', handleForm);
document.getElementById('formularz').onsubmit = function () { mainFunction() };