<?php
include("../../db.php");
mysqli_query($conexion, "DELETE FROM tecmu");
mysqli_close($conexion);
?>
<script>
    alert("Todos los boletines se han borrado con exito.")
    window.location.replace("../inicio.php");
</script>
<?php

?>