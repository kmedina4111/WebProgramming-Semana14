<?php
    include("../conexion/conexion.php");
    try {
        // Inicia la transaccion
        $conexion->beginTransaction();

        $stmt = $conexion->prepare("INSERT INTO departamento (Clave_Depto, Nombre, Presupuesto) VALUES (:Clave_Depto, :Nombre, :Presupuesto)");
        // Registros
        $stmt->execute([':Clave_Depto' => 1, ':Nombre' => 'Personal', ':Presupuesto' => 80000]);
        $stmt->execute([':Clave_Depto' => 2, ':Nombre' => 'Almacen', ':Presupuesto' => 70000]);
        $stmt->execute([':Clave_Depto' => 3, ':Nombre' => 'Contabilidad', ':Presupuesto' => 60000]);
        $stmt->execute([':Clave_Depto' => 4, ':Nombre' => 'Manufactura', ':Presupuesto' => 50000]);
        $stmt->execute([':Clave_Depto' => 5, ':Nombre' => 'Empaque', ':Presupuesto' => 30000]);
        // Confirma los cambios
        $conexion->commit();
        echo "Nuevos registros multiples insertados correctamente en la tabla departamento.";
    } catch (PDOException $e) {
        // Revertir cambios en caso de fallo
        $conexion->rollBack();
        echo "Error en insercion multiple: " . $e->getMessage();
    }
    $conexion = null;
?>