<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="POST">
        <h2>Formulario del Trabajador</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellidos" name="apellido" required>

        <label for="salario">Salario Base:</label>
        <input type="number" id="salario" name="salario" required>

        <label for="gerente">Gerente:</label>
        <input type="radio" required>

        <label for="vendedor">Vendedor:</label>
        <input type="radio" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>