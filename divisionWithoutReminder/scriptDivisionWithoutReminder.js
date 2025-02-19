function division() {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);

    if (isNaN(a) || isNaN(b) || isNaN(c) || c === 0) {
        document.getElementById("result").innerHTML = "Please enter valid numbers and ensure the divisor is not zero.";
        return;
    }

    var result = "";

    for (let i = a; i <= b; i++) {
        if (i % c === 0) {
            result += i + "<br />";
        }
    }

    document.getElementById("result").innerHTML = result || "No numbers found.";
}