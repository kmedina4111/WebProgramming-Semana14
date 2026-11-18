<?php
    include("../conexion/conexion.php");
    try {
        // Inicia la transaccion
        $conexion->beginTransaction();

        $stmt = $conexion->prepare("INSERT INTO empleados (Clave_empleado, Nombre, Apellidos, Clave_Depto) VALUES (:Clave_empleado, :Nombre, :Apellidos, :Clave_Depto)");
        // Registros
        $stmt->execute([':Clave_empleado' => 'EMP01', ':Nombre' => 'Armando', ':Apellidos' => 'Lopez', ':Clave_Depto' => 2]);
        $stmt->execute([':Clave_empleado' => 'EMP02', ':Nombre' => 'Tatiana', ':Apellidos' => 'Vargas', ':Clave_Depto' => 1]);
        $stmt->execute([':Clave_empleado' => 'EMP03', ':Nombre' => 'Laura', ':Apellidos' => 'Iturria', ':Clave_Depto' => 3]);
        $stmt->execute([':Clave_empleado' => 'EMP04', ':Nombre' => 'Juan', ':Apellidos' => 'Perez', ':Clave_Depto' => 4]);
        $stmt->execute([':Clave_empleado' => 'EMP05', ':Nombre' => 'Ivan', ':Apellidos' => 'Lopez', ':Clave_Depto' => 4]);
        $stmt->execute([':Clave_empleado' => 'EMP06', ':Nombre' => 'Margarita', ':Apellidos' => 'Hernandez', ':Clave_Depto' => 1]);
        $stmt->execute([':Clave_empleado' => 'EMP07', ':Nombre' => 'Jesus', ':Apellidos' => 'Perez', ':Clave_Depto' => 3]);
        $stmt->execute([':Clave_empleado' => 'EMP08', ':Nombre' => 'Tonatiuh', ':Apellidos' => 'Flores', ':Clave_Depto' => 2]);
        $stmt->execute([':Clave_empleado' => 'EMP09', ':Nombre' => 'Juan', ':Apellidos' => 'Lopez', ':Clave_Depto' => 4]);
        $stmt->execute([':Clave_empleado' => 'EMP10', ':Nombre' => 'Jose', ':Apellidos' => 'Hernandez', ':Clave_Depto' => 5]);
        // Confirma los cambios
        $conexion->commit();
        echo "Nuevos registros multiples insettados correctamente en la tabla empleados.";
    } catch (PDOException $e) {
        // Revertir cambios en caso de fallo
        $conexion->rollBack();
        echo "Error en insercion multiple: " . $e->getMessage();
    }
    $conexion = null;
?>