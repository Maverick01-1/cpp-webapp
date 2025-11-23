<!DOCTYPE html>
<html>
<head>
    <title>Registro en Azure SQL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Formulario de Registro</h2>

<form action="insertar.php" method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
