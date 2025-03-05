let prize = 0;
let attempt = 0;
let gameOver = false;

document.getElementById('gameForm').addEventListener('submit', function(event) {
    event.preventDefault();
    startGame();
});

function startGame() {
    let gridSize = Number(document.getElementById('count').value);
    document.getElementById("start").remove();

    let tileSize = 100 / gridSize;
    prize = Math.floor(Math.random() * (gridSize * gridSize));

    for (let row = 0; row < gridSize; row++) {
        for (let col = 0; col < gridSize; col++) {
            let tileIndex = row * gridSize + col;
            let tile = document.createElement("div");
            tile.id = `tile${tileIndex}`;
            tile.style.width = tileSize + '%';
            tile.style.height = tileSize + '%';
            tile.style.float = "left";
            
            tile.style.background = ((row + col) % 2 === 0) ? "red" : "green";

            tile.onclick = function () { revealTile(tileIndex) };
            document.getElementById("main").appendChild(tile);
        }
    }
}

function revealTile(tileIndex) {
    attempt++;
    let tile = document.getElementById(`tile${tileIndex}`);
    tile.style.background = "rgba(0,0,0,0)";

    if (tileIndex === prize) {
        tile.innerHTML = `<img src='logo.png' id='logo' style="width: 100%; height: 100%;">`;
        showWinMessage();
        gameOver = true;
        disableTileClicks();
    }
}

function showWinMessage() {
    let messageDiv = document.createElement("div");
    messageDiv.id = "end";
    messageDiv.style.width = '100vw';
    messageDiv.style.height = '250px';
    messageDiv.style.background = "blue";
    messageDiv.style.position = 'absolute';
    messageDiv.style.color = 'white';
    messageDiv.style.top = '50%';
    messageDiv.style.left = '50%';
    messageDiv.style.transform = 'translate(-50%, -50%)';
    messageDiv.style.flexDirection = 'column';

    messageDiv.innerHTML = `
        <h1 style="margin: 5px 0;">Victory!</h1>
        <h2 style="margin: 5px 0;">Attempts: ${attempt}</h2>
        <h2 style="margin: 5px 0;">Congratulations!</h2>
        <button id="restartBtn" style="padding: 10px; margin-top: 10px;">Restart Game</button>
    `;

    document.getElementById("main").appendChild(messageDiv);
	document.getElementById("restartBtn").addEventListener('click', restartGame);
}

function disableTileClicks() {
    let allTiles = document.querySelectorAll('[id^="tile"]');
    allTiles.forEach(tile => {
        tile.onclick = null;
    });
}

function restartGame() {
	prize = 0;
    attempt = 0;
    gameOver = false;

    let tiles = document.querySelectorAll('[id^="tile"], #end');
    tiles.forEach(tile => tile.remove());

    document.getElementById("main").innerHTML = `
	<div id="start">
        <form id="gameForm">
            <label for="count">Enter the number of fields:</label><br><br>
            <input type="number" id="count" autofocus required min="1"><br><br>
            <input type="submit" value="Start Game">
        </form>
    </div>
    `;

    document.getElementById('gameForm').addEventListener('submit', function(event) {
        event.preventDefault();
        startGame();
    });
}