const left = document.getElementById('left');
const mid = document.getElementById('center');
const right = document.getElementById('right');
const h2a = document.getElementById('h2a');
const h2b = document.getElementById('h2b');
const logo = document.getElementById('logo');
left.onmouseover = function () {
    this.style.backgroundColor = 'blue';
};
left.onmouseleave = function () {
    this.style.backgroundColor = 'RGB(145, 127, 112)';
};
mid.onclick = function () {
    this.style.backgroundColor = 'red';
};
mid.ondblclick = function () {
    this.style.backgroundColor = 'RGB(184, 168, 169)';
};
right.onclick = function () {
    h2a.style.color = 'green';
    h2b.style.color = 'green';
};
right.ondblclick = function () {
    h2a.style.color = 'white';
    h2b.style.color = 'white';
};
logo.onclick = function () {
    this.src = 'logo.jpg';
    this.style.float = 'none';
    this.style.position = 'absolute';
    this.style.left = '50%';
    this.style.top = '50%';
    this.style.transform = 'translate(-50%, -50%)';
};
logo.ondblclick = function () {
    this.src = 'logo-mini.jpg';
    this.style.float = 'right';
    this.style.position = 'static';
    this.style.left = '0';
    this.style.top = '0';
    this.style.transform = 'translate(0, 0)';
};