// Select elements
const left = document.querySelector('.panel_left');
const mid = document.querySelector('.panel_center');
const right = document.querySelector('.panel_right');
const h2a = right.querySelector('h2:nth-of-type(1)');
const h2b = right.querySelector('h2:nth-of-type(2)');
const logo = right.querySelector('img');

// Track logo state
let logoMoved = false;

// Change left panel background on hover
left.onmouseover = function () {
    this.style.backgroundColor = 'blue';
};
left.onmouseleave = function () {
    this.style.backgroundColor = 'RGB(166, 124, 104)'; // Matches CSS color
};

// Change center panel background on click/double-click
mid.onclick = function () {
    this.style.backgroundColor = 'red';
};
mid.ondblclick = function () {
    this.style.backgroundColor = 'RGB(217, 176, 140)'; // Matches CSS color
};

// Change right panel text color on click/double-click
right.onclick = function () {
    h2a.style.color = 'green';
    h2b.style.color = 'green';
};
right.ondblclick = function () {
    h2a.style.color = 'white';
    h2b.style.color = 'white';
};

// Change logo position and source on click/double-click
logo.onclick = function () {
    this.src = 'logo.jpg';
    this.style.float = 'none';
    this.style.width = '200px';
    this.style.position = 'absolute';
    this.style.left = '50%';
    this.style.top = '50%';
    this.style.transform = 'translate(-50%, -50%)';
};
// Toggle logo position and source on double-click
logo.ondblclick = function () {
    if (logoMoved) {
        // Reset to original position
        this.src = 'logo-mini.jpg';
        this.style.width = '100px';
        this.style.float = 'none';
        this.style.position = 'static';
        this.style.transform = 'translate(0, 0)';
        logoMoved = false; // Reset state
    } else {
        // Move logo again if already reset
        this.src = 'logo.jpg';
        this.style.width = '200px';
        this.style.float = 'none';
        this.style.position = 'absolute';
        this.style.left = '50%';
        this.style.top = '50%';
        this.style.transform = 'translate(-50%, -50%)';
        logoMoved = true;
    }
};