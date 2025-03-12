let _timeElement10Digits = Array.from(Array(10)).map((n, i) => i);
let _timeElement6Digits = _timeElement10Digits.slice(0, 6);
let _timeElement3Digits = _timeElement10Digits.slice(0, 3);
let _timeElementStructure = [
		[ _timeElement3Digits, _timeElement10Digits ],
		[ _timeElement6Digits, _timeElement10Digits ],
		[ _timeElement6Digits, _timeElement10Digits ]
	];

let clock = document.createElement('div');
clock.id = 'clock';
document.body.appendChild(clock);
let digitGroups = [];
requestAnimationFrame(update);

_timeElementStructure.forEach((digits, index) => {
	let digitGroup = document.createElement('div');
	digitGroup.classList.add('digit-group');

	digits.forEach(digitList => {
		let digit = document.createElement('div');
		digit.classList.add('digit');
		digitList.forEach(n => {
			let ele = document.createElement('div');
			ele.classList.add('digit-number');
			ele.innerText = n;
			digit.appendChild(ele);
		});
		digitGroup.appendChild(digit);
	});

	// Add a colon AFTER every digit group EXCEPT the last one
	if (index < _timeElementStructure.length - 1) {
		let colon = document.createElement('div');
		colon.classList.add('colon');
		colon.innerText = ":";
		digitGroup.appendChild(colon);
	}
	
	clock.appendChild(digitGroup);
	digitGroups.push(digitGroup);
});

function update() {
	requestAnimationFrame(update);
	let date = new Date();
	let time = [ date.getHours(), date.getMinutes(), date.getSeconds() ]
		.map(n => `0${n}`.slice(-2).split('').map(e => +e))
		.reduce((p, n) => p.concat(n), []);
	time.forEach((n, i) => {
		let digit = digitGroups[Math.floor(i * 0.5)].children[i % 2].children;
		Array.from(digit).forEach((e, i2) => e.classList[i2 === n ? 'add' : 'remove']('highlight'));
	});
}
function createMatrixRain() {
    const matrixContainer = document.createElement('div');
    matrixContainer.classList.add('matrix-rain');
    document.body.appendChild(matrixContainer);

    const columns = Math.floor(window.innerWidth / 20); // Adjust column width
    for (let i = 0; i < columns; i++) {
        let rainDrop = document.createElement('span');
        rainDrop.innerText = String.fromCharCode(0x30A0 + Math.random() * 96); // Random Japanese katakana character
        rainDrop.style.left = `${i * 20}px`;
        rainDrop.style.animationDuration = `${Math.random() * 3 + 2}s`;
        rainDrop.style.animationDelay = `${Math.random() * 5}s`;
        matrixContainer.appendChild(rainDrop);
    }
}

// Call the function on page load
createMatrixRain();
