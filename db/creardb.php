<?php
    include("../conexion/conexion.php");
    try {
        // Ejecucion de Script SQL para crea la DB con el nombre Persoanl
        $sql = "CREATE DATABASE IF NOT EXISTS PERSONAL CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci";
        // Ejecucion 
        $conexion->exec($sql);
        echo "Base de datos creada exitosamente";
    } catch (PDOException $e) {
        echo "Error al crear la base de datos: " . $e->getMessage();
    }
    // Cierre de PDO - cierra de la conexio a la db 
    $conexion = null;
?>
