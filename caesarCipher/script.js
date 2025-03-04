'use strict';

const alphabetLower = "abcdefghijklmnopqrstuvwxyz";
const alphabetUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let shiftValue = 0;

// Ask the user for the shift value on page load
window.onload = function () {
    shiftValue = parseInt(prompt("Enter shift value for the cipher (0 to disable encryption):"), 10);
    if (isNaN(shiftValue)) {
        shiftValue = 0;
    }

    // Ensure shift value is within the range [-25, 25]
    shiftValue = ((shiftValue % 26) + 26) % 26;
};

function encrypt() {
    let message = document.getElementById("inDecodedText").value;
    let result = "";

    for (let i = 0; i < message.length; i++) {
        let char = message[i];

        if (char === " ") {
            result += " ";
        } else if (alphabetUpper.includes(char)) {
            let index = (alphabetUpper.indexOf(char) + shiftValue) % 26;
            result += alphabetUpper[index];
        } else if (alphabetLower.includes(char)) {
            let index = (alphabetLower.indexOf(char) + shiftValue) % 26;
            result += alphabetLower[index];
        } else {
            result += char; // Keep non-alphabet characters unchanged
        }
    }

    document.getElementById("outCodedText").innerHTML = result;
}

function decrypt() {
    let message = document.getElementById("inCodedText").value;
    let result = "";

    for (let i = 0; i < message.length; i++) {
        let char = message[i];

        if (char === " ") {
            result += " ";
        } else if (alphabetUpper.includes(char)) {
            let index = (alphabetUpper.indexOf(char) - shiftValue + 26) % 26;
            result += alphabetUpper[index];
        } else if (alphabetLower.includes(char)) {
            let index = (alphabetLower.indexOf(char) - shiftValue + 26) % 26;
            result += alphabetLower[index];
        } else {
            result += char; // Keep non-alphabet characters unchanged
        }
    }

    document.getElementById("outDecodedText").innerHTML = result;
}