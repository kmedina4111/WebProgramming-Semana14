<?php
    include("../conexion/conexion.php");
    try {
    // Script SQL para crear la tabla empleads 
    $sql = "CREATE TABLE IF NOT EXISTS `departamento` (
        `Clave_Depto` INT NOT NULL PRIMARY KEY,
        `Nombre` VARCHAR(30) NOT NULL,
        `Presupuesto` INT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
    // Ejecucion para crea la table
    $conexion->exec($sql);
    echo "La tabla departamentos se creo correctamente";
    } catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
    }
    // Cierre de PDO - cierra la conexion a la db
    $conexion = null;
?>


