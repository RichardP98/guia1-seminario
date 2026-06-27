<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Editar Usuario</h2>

    <form method="POST" action="index.php?action=edit">

        <!-- ID oculto -->
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input
                type="text"
                name="nombre"
                class="form-control"
                value="<?= htmlspecialchars($user['nombre']) ?>"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                value="<?= htmlspecialchars($user['email']) ?>"
                required>
        </div>

        <button type="submit" class="btn btn-success">
            Actualizar
        </button>

        <a href="index.php?action=index" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</body>
</html>