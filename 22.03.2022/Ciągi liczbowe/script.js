'use strict';

function generate() {
    let varA = Number(document.getElementById('varA').value);
    const subR = Number(document.getElementById('subR').value);
    const cntN = Number(document.getElementById('cntN').value);

if(varA == '' || subR == '' || cntN == '') {
    document.getElementById('result').style.color = `red`;
    document.getElementById('result').innerHTML = `Wszystkie pola muszą być uzupełnione!`;
}
else {
if(isNaN(varA) || isNaN(subR) || isNaN(cntN)) {
    document.getElementById('result').style.color = `red`;
    document.getElementById('result').innerHTML = `Wprowadzone wartości muszą być liczbami!`;
}
else {
    if (varA < 0){
        document.getElementById('result').style.color = `red`;
        document.getElementById('result').innerHTML = `Wyraz A1 nie może być ujemny!`;
    }
    else {
        if (subR <= 0 || cntN <= 0) {
            document.getElementById('result').style.color = `red`;
            document.getElementById('result').innerHTML = `Różnica ciągu R i liczba wyrazów ciągu N muszą być większe od 0!`;
        }
        else {
            document.getElementById('result').style.color = `#2F2F2F`;
            document.getElementById('result').innerHTML = `Ciąg arytmetyczny zawiera wyrazy:`;
        for (let i = 0; i < cntN-1; i++) {
            document.getElementById('result').innerHTML += ` ${varA},`;
        varA += subR;
        }
        document.getElementById('result').innerHTML += ` ${varA}.`;
        }   
    }   
}
}
}