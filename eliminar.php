<?php

include('db.php');

$ID = $_POST['txtID'];

mysqli_begin_transaction($conexion);

try {
    mysqli_query($conexion, "DELETE FROM automovil WHERE ID='$ID'") or die("error al eliminar");

    mysqli_commit($conexion);
} catch (Exception $e) {
    mysqli_rollback($conexion);
    die("Error en la transacción: " . $e->getMessage());
}

mysqli_close($conexion);
header("location:mostrar.php");

?>
