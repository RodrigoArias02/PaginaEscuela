<?php
include("../../db.php");

if (isset($_POST['edit'])) {
    // Recoger datos generales del formulario
    $dni_cambiar = $_POST['dni_cambiar'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $adeuda_1 = $_POST['adeuda1'];
    $adeuda_2 = $_POST['adeuda2'];
    $adeuda_3 = $_POST['adeuda3'];
    $años = $_POST['años'];
    $ciclo = $_POST['ciclo'];
    $materias_cantidad;

    if($años==1){
        $materias_cantidad=11;
    }elseif($años==2 || $años==3){
        $materias_cantidad=13;
    }elseif($años==4 || $años==5){
        $materias_cantidad=14;
    }elseif($años==7){
        $materias_cantidad=8;
    }elseif($ciclo=="tecpro" && $años=6){
        $materias_cantidad=14;
    }else{
        $materias_cantidad=13;
    }

    // Actualizar datos generales
    $actualizarnombre = "UPDATE tecmu SET Nombre=?, Apellido=?, adeuda_1=?, adeuda_2=?, adeuda_3=? WHERE DNI=?";
    $stmt = $conexion->prepare($actualizarnombre);
    $stmt->bind_param("ssssss", $nombre, $apellido, $adeuda_1, $adeuda_2, $adeuda_3, $dni_cambiar);
    $stmt->execute();
    $stmt->close();

    try {
        // Recoger datos de las materias y construir la consulta SQL
        $consulta = "UPDATE tecmu SET ";
        $valores = [];
        for ($i = 1; $i <= $materias_cantidad; $i++) {
            $materia_n1 = $_POST['materia_' . $i . '_n1'] ?? "";
            $materia_n2 = $_POST['materia_' . $i . '_n2'] ?? "";
            
            // Agregar los nombres de las columnas y los valores a la consulta y los valores
            $consulta .= "materia_" . $i . "_n1=?, materia_" . $i . "_n2=?, ";
            $valores[] = $materia_n1;
            $valores[] = $materia_n2;
        }
        
        // Quitar la última coma y espacio de la consulta
        $consulta = rtrim($consulta, ", ");
        $consulta .= " WHERE DNI=?";
        
        // Agregar el DNI al array de valores
        $valores[] = $dni_cambiar;
        // Ejecutar la consulta SQL para actualizar las materias
        $stmt = $conexion->prepare($consulta);
        // Construir el string de tipos para el bind_param
        $tipos = str_repeat('s', count($valores));
        $stmt->bind_param($tipos, ...$valores);
        
        $stmt->execute();

        

        // Redirigir a la página de consulta de boletines después de actualizar
        ?>
        <script>
            alert("guardado con exito")
            window.location.replace("../registro/consultarBoletin.php");
        </script>
        <?php
    } catch (\Throwable $th) {
        // Manejar errores durante la actualización
        print $th;
        ?>
        <script>
            alert("Error al guardar los datos");
            window.location.replace("../registro/consultarBoletin.php");
        </script>
        <?php
    }

    // Cerrar la conexión
    $stmt->close();
    mysqli_close($conexion);
}
?>
