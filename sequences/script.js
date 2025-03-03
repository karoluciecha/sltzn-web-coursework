function generateArithmetic() {
    let a = parseInt(document.getElementById('a').value);
    let r = parseInt(document.getElementById('r').value);
    let n = parseInt(document.getElementById('n').value);

    if (isNaN(a) || isNaN(r) || isNaN(n) || n <= 0) {
        document.getElementById('arith_result').style.color = 'red';
        document.getElementById('arith_result').innerHTML = 'Please enter valid positive numbers.';
        return;
    }

    let result = `Arithmetic sequence: ${a}`;
    for (let i = 1; i < n; i++) {
        a += r;
        result += `, ${a}`;
    }
    result += ".";

    document.getElementById('arith_result').style.color = 'black';
    document.getElementById('arith_result').innerHTML = result;
}

function generateFibonacci() {
    let n = parseInt(document.getElementById('fib_n').value);

    if (isNaN(n) || n <= 0) {
        document.getElementById('fib_result').style.color = 'red';
        document.getElementById('fib_result').innerHTML = 'Please enter a valid positive number.';
        return;
    }

    let fibSeq = [0, 1];
    for (let i = 2; i < n; i++) {
        fibSeq.push(fibSeq[i - 1] + fibSeq[i - 2]);
    }

    document.getElementById('fib_result').style.color = 'black';
    document.getElementById('fib_result').innerHTML = `Fibonacci sequence: ${fibSeq.slice(0, n).join(', ')}.`;
}