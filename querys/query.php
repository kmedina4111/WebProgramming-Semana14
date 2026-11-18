<?php
    include("../conexion/conexion.php");
    //1 Listado Genreal EMPLEADOS
    echo "<h3>1. LISTADO GENERAL DE EMPLEADOS</h3>";
    try {
        // Consulta LISTAR TODO LOS EMPLEADOS
        $stmt = $conexion->query("SELECT Clave_empleado, Nombre, Apellidos, Clave_Depto FROM empleados");
        // fetchAll() recupera todas las filas en un array
        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            foreach ($filas as $fila) {
                echo "Clave: " . $fila["Clave_empleado"] . " - Nombre: " . $fila["Nombre"] . " | Apellidos: " . $fila["Apellidos"] . " | Departamento: " . $fila["Clave_Depto"] . "<br>";
            }
        } else {
            echo "0 resultados";
        }
    } catch (PDOException $e) {
        echo "Error al seleccionar: " . $e->getMessage();
    }

    //2 Listado Genreal DEPARTAMENTOS
    echo "<h3>2. LISTAD0 GENERAL DE DEPARTAMENTOS</h3>";
    try {
        // Consulta para seleccionar todos los departamentos
        $stmt = $conexion->query("SELECT Clave_Depto, Nombre, Presupuesto FROM departamento");
        // fetchAll() recupera todas las filas en un array
        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            foreach ($filas as $fila) {
                echo "Clave: " . $fila["Clave_Depto"] . " - Nombre: " . $fila["Nombre"] . " | Presupuesto: " . $fila["Presupuesto"] . "<br>";
            }
        } else { echo "0 resultados";}
    } catch (PDOException $e) {
        echo "Error al seleccionar: " . $e->getMessage();
    }

    //3 Empleados que se apellidan Lopez
    echo "<h3>3. EMPLEADOS QUE SE APELLIDAN LOPEZ</h3>";
    try {
        // Consulta para seleccionar los empleados con apellido Lopez
        $stmt = $conexion->query("SELECT Clave_empleado, Nombre, Apellidos, Clave_Depto FROM empleados WHERE Apellidos = 'Lopez'");
        // fetchAll() recupera todas las filas en un array
        $filas = $stmt->fetchAll();

        if (count($filas) > 0) {
            foreach ($filas as $fila) {
                echo "Clave: " . $fila["Clave_empleado"] . " - Nombre: " . $fila["Nombre"] . " | Apellidos: " . $fila["Apellidos"] . " | Departamento: " . $fila["Clave_Depto"] . "<br>";
            }
        } else {
            echo "0 resultados";
        }
    } catch (PDOException $e) {
        echo "Error al seleccionar: " . $e->getMessage();
    }

    $conexion = null;

