<?php
    include("../conexion/conexion.php");
    try {
    // Script SQL para crear la tabla empleads 
    $sql = "CREATE TABLE IF NOT EXISTS `empleados` (
        `Clave_empleado` VARCHAR(8) NOT NULL PRIMARY KEY,
        `Nombre` VARCHAR(30) NOT NULL,
        `Apellidos` VARCHAR(30) NOT NULL,
        `Clave_Depto` INT NOT NULL,
        CONSTRAINT `fk_empleados_departamento`
        FOREIGN KEY (`Clave_Depto`) REFERENCES `departamento` (`Clave_Depto`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
    // Ejecucion para crea la table
    $conexion->exec($sql);
    echo "La tabla se creo correctamente";
    } catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
    }
    // Cierre de PDO - cierra la conexion a la db
    $conexion = null;
?>
