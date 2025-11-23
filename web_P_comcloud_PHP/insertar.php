<?php
require "conexion.php";

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    try {
        $sql = "INSERT INTO usuarios (nombre, correo) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombre, $correo]);

        echo "<h2>OK Registro guardado correctamente en Azure SQL</h2>";
        echo "<a href='index.php'>Volver</a>";

    } catch (PDOException $e) {
        die("X Error al insertar datos: " . $e->getMessage());
    }

} else {
    echo "X Datos incompletos";
}
?>
