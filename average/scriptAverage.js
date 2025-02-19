function showTable() {
    document.getElementById('right').innerHTML = `
        <table>
            <tr><th>Query Content</th><th id='screenshot'>Screenshot</th></tr>
            <tr><td>SELECT * FROM students;</td><td><img src='screenshot1.png' alt='Screenshot'></td></tr>
            <tr><td>SELECT AVG(grade) FROM students;</td><td><img src='screenshot2.png' alt='Screenshot'></td></tr>
        </table>`;
}

function calculateHighestAverage() {
    let polak = parseFloat(document.getElementById("polak").value) || 0;
    let nowak = parseFloat(document.getElementById("nowak").value) || 0;
    let rysik = parseFloat(document.getElementById("rysik").value) || 0;

    let maxAverage = Math.max(polak, nowak, rysik);
    document.getElementById("highest").innerText = `Highest average: ${maxAverage}`;
}