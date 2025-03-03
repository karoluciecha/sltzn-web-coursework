// 'use strict';
// function calc() {
//     const a = document.getElementById('l_ogloszen').value;
//     const tf = document.getElementById('upust').checked;
//     if (a == "") {
//         document.getElementById('result').style.color = 'red';
//         document.getElementById('result').innerHTML = 'Naley podać ilość ogłoszeń.';
//     }
//     else if (isNaN(a)) {
//         document.getElementById('result').style.color = 'red';
//         document.getElementById('result').innerHTML = 'Ilość ogłoszeń musi być liczbą.';
//     }
//     else if (a <= 0) {
//         document.getElementById('result').style.color = 'red';
//         document.getElementById('result').innerHTML = 'Ilość ogłoszeń musi być większa od 0.';
//     }
//     else if (!tf) {
//         document.getElementById('result').style.color = 'red';
//         document.getElementById('result').innerHTML = 'Czy na pewno chcesz obliczyć cenę bez upustu?';

//         let y = document.getElementById("btnyes");
//         y.style.display = "inline";
//         let n = document.getElementById("btnno");
//         n.style.display = "inline";
//     }
//     else if (tf) {
//         calcY();
//     }
// }
// function calcY() {
//     let y = document.getElementById("btnyes");
//     y.style.display = "none";
//     let n = document.getElementById("btnno");
//     n.style.display = "none";
//     const a = document.getElementById('l_ogloszen').value;
//     if (a <= 50) {
//         document.getElementById('result').style.color = 'black';
//         document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 1.8} PLN.`;
//     }
//     else {
//         document.getElementById('result').style.color = 'black';
//         document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 0.8} PLN.`;
//     }
// }
// function calcN() {
//     let y = document.getElementById("btnyes");
//     y.style.display = "none";
//     let n = document.getElementById("btnno");
//     n.style.display = "none";
//     const a = document.getElementById('l_ogloszen').value;
//     if (a <= 50) {
//         document.getElementById('result').style.color = 'black';
//         document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 2} PLN.`;
//     }
//     else {
//         document.getElementById('result').style.color = 'black';
//         document.getElementById('result').innerHTML = `Koszt ogłoszeń: ${a * 1} PLN.`;
//     }

// }
// function endall() {
//     let y = document.getElementById("btnyes");
//     y.style.display = "none";
//     let n = document.getElementById("btnno");
//     n.style.display = "none";
//     document.getElementById("result").innerHTML = "";
// }
'use strict';

function calculatePrice() {
    const adCount = document.getElementById('ad_count').value;
    const discountApplied = document.getElementById('discount').checked;
    const resultElement = document.getElementById('result');
    
    if (!adCount) {
        resultElement.style.color = 'red';
        resultElement.innerHTML = 'Please enter the number of ads.';
        return;
    }
    
    if (isNaN(adCount) || adCount <= 0) {
        resultElement.style.color = 'red';
        resultElement.innerHTML = 'The number of ads must be a positive number.';
        return;
    }

    if (!discountApplied) {
        resultElement.style.color = 'red';
        resultElement.innerHTML = 'Are you sure you want to calculate without the discount?';
        document.getElementById("btn_yes").style.display = "inline";
        document.getElementById("btn_no").style.display = "inline";
    } else {
        applyDiscount();
    }
}

function applyDiscount() {
    document.getElementById("btn_yes").style.display = "none";
    document.getElementById("btn_no").style.display = "none";

    const adCount = document.getElementById('ad_count').value;
    const pricePerAd = adCount <= 50 ? 1.8 : 0.8;
    const totalCost = adCount * pricePerAd;

    document.getElementById('result').style.color = 'black';
    document.getElementById('result').innerHTML = `Total cost: ${totalCost.toFixed(2)} PLN.`;
}

function calculateWithoutDiscount() {
    document.getElementById("btn_yes").style.display = "none";
    document.getElementById("btn_no").style.display = "none";

    const adCount = document.getElementById('ad_count').value;
    const pricePerAd = adCount <= 50 ? 2 : 1;
    const totalCost = adCount * pricePerAd;

    document.getElementById('result').style.color = 'black';
    document.getElementById('result').innerHTML = `Total cost: ${totalCost.toFixed(2)} PLN.`;
}

function clearResult() {
    document.getElementById("btn_yes").style.display = "none";
    document.getElementById("btn_no").style.display = "none";
    document.getElementById("result").innerHTML = "";
}