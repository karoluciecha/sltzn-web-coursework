function toggleTitle() {
    let titleElement = document.getElementById('banner-title');
    titleElement.innerText = titleElement.innerText === "High School Website Project" ? "High School Database" : "High School Website Project";
}
function fontColor() {
    const randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
    document.body.style.color = randomColor;
    const links = document.getElementsByTagName('a');
    for (let i = 0; i < links.length; i++) {
        links[i].style.color = randomColor;
    }
}
function backgroundColor() {
    ['banner', 'left_panel', 'center_panel', 'right_panel', 'down'].forEach(id => {
        const elem = document.getElementById(id) || document.body;
        let randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
        elem.style.backgroundColor = randomColor;
    });
}
function dateLM() { document.getElementById('dLM').innerHTML = document.lastModified; }
function numberElements() {
    document.getElementById('nOE').innerHTML = `Quantity of "td" elements on page: ${document.getElementsByTagName('td').length}`;
}
function calculate() {
    let polak = document.getElementById('polak').value;
    let nowak = document.getElementById('nowak').value;
    let rysik = document.getElementById('rysik').value;
    let average = (parseInt(polak) + parseInt(nowak) + parseInt(rysik)) / 3;
    if (isNaN(average) || polak === "" || nowak === "" || rysik === "") alert("Please enter correct data");
    else document.getElementById('result').innerHTML = average.toFixed(2);
}