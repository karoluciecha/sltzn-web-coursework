function division() {
	var a = document.getElementById("a").value;
	var b = document.getElementById("b").value;
	var c = document.getElementById("c").value;

	var equal = "";

	for (let i = a; i <= b; i++) {
		if (i % c == 0) {
			equal += (i + "<br />");
        }
    }
	document.getElementById("beginning").innerHTML = equal;
}