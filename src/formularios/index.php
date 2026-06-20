<?php

$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['telefono'])) {
        $mensaje = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($_POST['telefono'])) {
        $mensaje = "El teléfono debe ser numérico.";
    } else {
        $nombre_mostrado = htmlspecialchars($_POST['nombre']);
        $mensaje = "Bienvenido, $nombre_mostrado!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

    <h2>Registro Rápido</h2>

    <p style="color:blue;"><?= $mensaje ?></p>

    <form method="POST" action="">
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <br><br>

        <label>
            Email:
            <input type="email" name="email">
        </label>
        <br><br>

        <label>
            Teléfono:
            <input type="number" name="telefono">
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <p>
        <strong>Comparativa:</strong>
        Prueba cambiando <code>method="GET"</code> y observa la URL.
    </p>

</body>
</html>