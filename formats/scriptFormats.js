function changeColor(color) {
    let element = document.getElementById('modifiableText');
    element.style.color = color;
}

document.getElementById('fontSize').addEventListener('input', function() {
    let size = this.value;
    if (size > 0) {
        document.getElementById('modifiableText').style.fontSize = size + '%';
    }
});

document.getElementById('styleSelect').addEventListener('change', function() {
    document.getElementById('modifiableText').style.fontStyle = this.value;
});