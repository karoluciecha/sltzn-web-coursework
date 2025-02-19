'use strict';

const passwd = document.getElementById('passwd').value;
const result = document.getElementById('result');
const regex = /\d/;

window.onload = function () {

};
function chck() {
    let passwd = document.getElementById("passwd").value;
	
	if (passwd != "") {
		if (passwd.length >= 7 && regex.test(passwd)) {
			result.style.color = 'green';
			result.innerHTML = 'HASŁO JEST DOBRE';
		}
		else if (passwd.length >= 4 && passwd.length <= 6 && regex.test(passwd)) {
				result.style.color = 'blue';
				result.innerHTML = 'HASŁO JEST ŚREDNIE';
			}
			else {
				result.style.color = 'yellow';
				result.innerHTML = 'HASŁO JEST SŁABE';
		}
	}
	else {
		result.style.color = 'red';
		result.innerHTML = 'HASŁO JEST PUSTE';
	}

}