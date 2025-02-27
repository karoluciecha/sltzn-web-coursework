'use strict';
const a = 70;
const b = 80;
function calc() {
    if (document.getElementById('pow').value == "") {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Błąd. Nie wprowadzono powierzchni.';
    }
    else if (Number(document.getElementById('pow').value) <= 0) {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Błąd. Wprowadzona liczba musi być większa niż 0.';
    }
    else if (isNaN(document.getElementById('pow').value)) {
        document.getElementById('result').style.color = 'red';
        document.getElementById('result').innerHTML = 'Błąd. Wprowadź liczbę.';
    }
    else {
        if (document.getElementById('radio1').checked == false) {
            if (document.getElementById('radio2').checked == false) {
                document.getElementById('result').style.color = 'red';
                document.getElementById('result').innerHTML = 'Błąd. Wybierz jedną z powyższych opcji.';
            }
            else {
                document.getElementById('result').style.color = 'black';
                document.getElementById('result').innerHTML = `Koszt kafelkowania: ${Number(document.getElementById('pow').value) * 80} zł.`
            }
        }
        else {
            document.getElementById('result').style.color = 'black';
            document.getElementById('result').innerHTML = `Koszt kafelkowania: ${Number(document.getElementById('pow').value) * 70} zł.`
        }
    }

}