'use strict';

const alphabetLower = "aąbcćdeęfghijklłmnńoópqrsśtuvwxyzżź";
let newAlphabetLower = "";
const alphabetUpper = "AĄBCĆDEĘFGHIJKLŁMNŃOÓPQRSŚTUVWXYZŻŹ";
let newAlphabetUpper = "";
const space = " ";

window.onload = function () {
    let n = Number(prompt("O ile liter chcesz przesunąć szyfr? (0 nie szyfruje)"));
    for (let i = 0; i < alphabetLower.length; i++) {
        let offset = (i + n) % alphabetLower.length;
        newAlphabetLower += alphabetLower[offset];
    }
    for (let i = 0; i < alphabetUpper.length; i++) {
        let offset = (i + n) % alphabetUpper.length;
        newAlphabetUpper += alphabetUpper[offset];
    }
};
function encrypt() {
    let message = document.getElementById("inDecodedText").value;
    let vary;
    let result = "";
    for (let i = 0; i < message.length; i++) {
        if (message[i] == " ") {
            result += " ";
        }
        else if (message[i] == message[i].toUpperCase()) {
            let index = alphabetUpper.indexOf(message[i]);
            vary = newAlphabetUpper[index];
            result += vary.toLowerCase();
        }
        else {
            let index = alphabetLower.indexOf(message[i]);
            vary = newAlphabetLower[index];
            result += vary.toUpperCase();
        }
    }
    document.getElementById("outCodedText").innerHTML = result;
}
function decrypt() {
    let message = document.getElementById("inCodedText").value;
    let result = "";
    let vary = "";
    for (let i = 0; i < message.length; i++) {
        if (message[i] == " ") {
            result += " ";
        }
        else if (message[i] == message[i].toUpperCase()) {
            let index = newAlphabetUpper.indexOf(message[i]);
            vary = alphabetUpper[index];
            result += vary.toLowerCase();
        }
        else {
            let index = newAlphabetLower.indexOf(message[i]);
            vary = alphabetLower[index];
            result += vary.toUpperCase();
        }
    }
    document.getElementById("outDecodedText").innerHTML = result;
}