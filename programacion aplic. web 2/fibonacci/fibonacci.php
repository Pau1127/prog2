<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie Fibonacci</title>
    <link rel="stylesheet" href="fibonacci.css">
</head>

<body>
    <div class="container">
        <h1>Serie Fibonacci</h1>
        <form id="fibonacciForm" onsubmit="return false;">
            <label for="numberInput">Ingrese un número (1-99):</label>
            <input type="number" id="numberInput" name="numberInput" min="1" max="99" required>
            <button type="button" onclick="generateFibonacci()">Mostrar Serie</button>
        </form>
        <div id="result"></div>
    </div>
    <a href="http://localhost\Paula_cid_cruz_m2_programacion aplic. web\mi pagina php\principal.php"
        class="btn btn-lg btn-primary">Volver a Principal</a>
    <script src="fibonacci script.js"></script>
</body>

</html>