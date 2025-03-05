function generateFibonacci() {
    let numberInput = document.getElementById("numberInput").value;
    let num = parseInt(numberInput);

    if (isNaN(num) || num < 1 || num > 99) {
        alert("Ingrese un número válido entre 1 y 99");
        return;
    }

    let fibSeries = [0, 1];
    for (let i = 2; i < num; i++) {
        fibSeries.push(fibSeries[i - 1] + fibSeries[i - 2]);
    }

    let resultDiv = document.getElementById("result");
    resultDiv.innerHTML = "Serie Fibonacci:\n" + fibSeries.join(", ");
}
