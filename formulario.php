<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-4 text-center">Formulario del Trabajador</h2>

            <form method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" id="apellidos" name="apellido" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="salario" class="form-label">Salario Base:</label>
                    <input type="number" id="salario" name="salario" class="form-control" required>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="gerente" name="gerente">
                    <label class="form-check-label" for="gerente">Gerente</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="vendedor" name="vendedor">
                    <label class="form-check-label" for="vendedor">Vendedor</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
