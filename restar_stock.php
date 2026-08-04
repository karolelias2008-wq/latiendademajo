<?php
// Mostrar errores en pantalla para depurar
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'conexion.php';

header('Content-Type: application/json; charset=utf-8');

// Verificamos si $pdo existe y se conectó bien
if (!isset($pdo)) {
    echo json_encode(["exito" => false, "mensaje" => "Error crítico: La variable \$pdo no está definida. Revisa conexion.php"]);
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !is_array($data)) {
    echo json_encode(["exito" => false, "mensaje" => "No se recibieron datos de productos válidos."]);
    exit;
}

try {
    $pdo->beginTransaction();

    foreach ($data as $item) {
        $id = isset($item['id']) && trim((string)$item['id']) !== '' ? trim((string)$item['id']) : null;
        $nombre = isset($item['nombre']) ? trim((string)$item['nombre']) : null;
        $cantidadComprada = isset($item['cantidad']) ? (int)$item['cantidad'] : 1;

        $afectados = 0;

        if ($id !== null) {
            $stmt = $pdo->prepare("
                UPDATE dbo.Productos 
                SET ProductoDisponible = ProductoDisponible - ? 
                WHERE ProductoID = ? AND ProductoDisponible >= ?
            ");
            $stmt->execute([$cantidadComprada, $id, $cantidadComprada]);
            $afectados = $stmt->rowCount();
        } 
        else if ($nombre !== null) {
            $nombreLimpio = rtrim($nombre, '.');

            $stmt = $pdo->prepare("
                UPDATE dbo.Productos 
                SET ProductoDisponible = ProductoDisponible - ? 
                WHERE (Nombre = ? OR Nombre LIKE ?) 
                AND ProductoDisponible >= ?
            ");
            
            $stmt->execute([
                $cantidadComprada,
                $nombreLimpio,
                $nombreLimpio . '%',
                $cantidadComprada
            ]);
            $afectados = $stmt->rowCount();
        } else {
            throw new Exception("El producto no contiene ni ID ni Nombre válido.");
        }

        if ($afectados === 0) {
            $ref = $id ?? $nombre;
            throw new Exception("No se pudo actualizar el stock para '$ref'. Revisa que exista en la BD y tenga suficiente stock.");
        }
    }

    $pdo->commit();
    echo json_encode(["exito" => true, "mensaje" => "¡Compra confirmada! Gracias por comprar en Tienda de Majo. El stock ha sido actualizado exitosamente."]);

} catch (Exception $e) {
    if (isset($pdo) && $pdo instanceof PDO && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    echo json_encode(["exito" => false, "mensaje" => "Error al restar stock: " . $e->getMessage()]);
}
?>