<!-- index.php  -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="inicio.css">
</head>

<body>
    <div class="welcome-container">
        <h1>Bienvenido a nuestra página MandyEFVSamoloOsita</h1>
        <p>Por favor, ingrese su información:</p>
        <form action="principal.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <label>
                <input type="checkbox" name="interesado">
                Estoy interesado en la información
            </label>
            <input type="submit" value="Enviar">
        </form>
        <div class="welcome-footer">Gracias por visitar nuestra página</div>
    </div>
</body>

</html>