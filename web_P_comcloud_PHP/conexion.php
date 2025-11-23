<?php
// Datos de la conexión a Azure SQL Database
$server = "tcp:cpp-sqlserver-01.database.windows.net,1433";
$database = "cpp-db";
$username = "CloudSA9465245c";
$password = "Sebas2025";

try {
    $conn = new PDO("sqlsrv:Server=$server;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(" Error al conectar con Azure SQL: " . $e->getMessage());
}
?>

