<?php
$serverName = ".\\SQLEXPRESS";
$database   = "La tiendademajo";

try {
    // Conexión usando la Autenticación de Windows local
    $pdo = new PDO("sqlsrv:Server=$serverName;Database=$database");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    if (ob_get_length()) ob_clean();
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        "exito" => false, 
        "mensaje" => "Error de conexión: " . $e->getMessage()
    ]);
    exit;
}
?>