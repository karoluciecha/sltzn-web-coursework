function ciag() {
            let a = document.getElementById('a').value;
            a = parseInt(a);
            let r = document.getElementById('r').value;
            r = parseInt(r);
            let n = document.getElementById('n').value;
            n = parseInt(n);
            let result = "Ciąg arytmetyczny zawiera wyrazy: " + a;
            for(let i = 1; i < n; i++) {
                a = a + r;
                result += ", " + a;
            }
			result += ".";
            document.getElementById('result').innerHTML = result;
        }