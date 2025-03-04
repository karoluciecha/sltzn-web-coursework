'use strict';

function checkPassword() {
    const passwd = document.getElementById("passwd").value;
    const result = document.getElementById("result");
    const numberRegex = /\d/;
    const specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;

    if (passwd.trim() === "") {
        result.style.color = 'red';
        result.innerHTML = 'Password cannot be empty!';
        return;
    }

    if (passwd.length >= 8 && numberRegex.test(passwd) && specialCharRegex.test(passwd)) {
        result.style.color = 'green';
        result.innerHTML = 'STRONG PASSWORD ✅';
    } else if (passwd.length >= 5 && numberRegex.test(passwd)) {
        result.style.color = 'blue';
        result.innerHTML = 'MEDIUM PASSWORD ⚠️';
    } else {
        result.style.color = 'orange';
        result.innerHTML = 'WEAK PASSWORD ❌';
    }
}