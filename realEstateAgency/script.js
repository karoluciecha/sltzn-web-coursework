function calculatePrice() {
    let price = 4000 * Number(document.getElementById('meters').value);
    price += 1000 * Number(document.getElementById('rooms').value);
    if (document.getElementById('bathroom').checked) {
        price += 2000;
    }
    document.getElementById('result').innerHTML = `Apartment cost: ${price} PLN.`;
}

const form = document.getElementById('form');
form.addEventListener('submit', function (event) {
    event.preventDefault();
    calculatePrice();
});
