'use strict';
function calc() {
    const a = document.getElementById('l_ogloszen').value;
    const tf = document.getElementById('upust').checked;
    if (a == "") {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Naley podać ilość ogłoszeń.';
    }
    else if (isNaN(a)) {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Ilość ogłoszeń musi być liczbą.';
    }
    else if (a <= 0) {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Ilość ogłoszeń musi być większa od 0.';
    }
    else if (!tf) {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Czy na pewno chcesz obliczyć cenę bez upustu?';

        let y = document.getElementById("btnyes");
        y.style.display = "inline";
        let n = document.getElementById("btnno");
        n.style.display = "inline";
    }
    else if (tf) {
        calcY();
    }
}
function calcY() {
    let y = document.getElementById("btnyes");
    y.style.display = "none";
    let n = document.getElementById("btnno");
    n.style.display = "none";
    const a = document.getElementById('l_ogloszen').value;
    if (a <= 50) {
        document.getElementById('result').style.color = 'black';
        document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 1.8} PLN.`;
    }
    else {
        document.getElementById('result').style.color = 'black';
        document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 0.8} PLN.`;
    }
}
function calcN() {
    let y = document.getElementById("btnyes");
    y.style.display = "none";
    let n = document.getElementById("btnno");
    n.style.display = "none";
    const a = document.getElementById('l_ogloszen').value;
    if (a <= 50) {
        document.getElementById('result').style.color = 'black';
        document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 2} PLN.`;
    }
    else {
        document.getElementById('result').style.color = 'black';
        document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 1} PLN.`;
    }

}
function endall() {
    let y = document.getElementById("btnyes");
    y.style.display = "none";
    let n = document.getElementById("btnno");
    n.style.display = "none";
    document.getElementById("result").innerHTML = "";
}