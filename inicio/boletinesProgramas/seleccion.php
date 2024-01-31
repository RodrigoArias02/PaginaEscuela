<?php
include("../../db.php");
require 'save_1.php';
$AÑO=0;
$ciclo=0;
if(ISSET($_POST['boletin'])){
    $dni=$_POST['DNIBOLE'];

    $query=mysqli_query($conexion,"SELECT * FROM tecmu WHERE DNI='$dni'");
    while($fetch= mysqli_fetch_array($query)){
        $AÑO=$fetch['AÑO'];
        $ciclo=$fetch['ciclo'];
    }
    if($AÑO>0  && $ciclo!=0){
        $var='EscanearBoletin/pdf_escanear.php';
    }else if($AÑO == 0  || $ciclo == 0){
        ?>
        <script>
            alert("El boletin no se pudo consultar debido a que no ha sido creado.")
            window.location.replace("formularioBoletines.php");
        </script>
        <?php
       
    }
    include($var);
}
if(ISSET($_POST['editar'])){
    $dni=$_POST['DNIBOLE'];
     $fecha=Date("Y");
     $query=mysqli_query($conexion,"SELECT * FROM tecmu WHERE DNI='$dni'");
    while($fetch= mysqli_fetch_array($query)){
        $AÑO=$fetch['AÑO'];
        $ciclo=$fetch['ciclo'];
    }
    if($AÑO>0  && $ciclo!=0){
        $var='boletines_editar/editar_pdf.php';
    }else if($AÑO == 0  || $ciclo == 0){
        ?>
        <script>
            alert("Ha ocurrido un error al editar")
            window.location.replace("formularioBoletines.php");
        </script>
        <?php
       
    }
    include($var);
}
if(ISSET($_POST['borrar1'])){
    $dni=$_POST['DNIBOLE'];
    mysqli_query($conexion, "DELETE FROM tecmu WHERE DNI='$dni'");
    ?>
    <script>
        alert("El boletin se elimino con exito")
        window.location.replace("../registro/consultarBoletin.php");
    </script>
    <?php
}
mysqli_close($conexion);
?>