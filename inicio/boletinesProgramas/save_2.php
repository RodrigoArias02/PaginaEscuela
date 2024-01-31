<?php
include("../../db.php");
	$nota1=0;
	if(ISSET($_POST['save'])){
		$DNI = $_POST['DNI'];
		$AÑOradio = $_POST['año'];
		$cicloRadio = $_POST['ciclo'];
		$promocion = $_POST['promueve'];
		$query = mysqli_query($conexion, "SELECT * FROM `tecmu` WHERE DNI='$DNI'");
        while($fetch = mysqli_fetch_array($query)){
			$nota1=$fetch['materia_1_n1'];
			$nota2=$fetch['materia_1_n2'];
			$añoTabla=$fetch['AÑO'];
			$ciclo=$fetch['ciclo'];
	    }
		if($nota2>0){
			?>
			<script>
			alert('El segundo cuatrimestre ya fue llenado')
				window.location.replace("form_Tecmu.php");
				</script>
			<?php
			exit();
		}
		if($nota1==0){
			?>
			<script>
			alert('El primer cuatrimestre no fue llenado aun.')
				window.location.replace("form_Tecmu.php");
				</script>
			<?php
			exit();
		}
			if($AÑOradio==$añoTabla && $ciclo==$cicloRadio){
				$materia_1_n2 = $_POST['materia_1_n1'];
				$materia_2_n2 = $_POST['materia_2_n1'];
				$materia_3_n2 = $_POST['materia_3_n1'];			
				$materia_4_n2 = $_POST['materia_4_n1'];
				$materia_5_n2 = $_POST['materia_5_n1'];
				$materia_6_n2 = $_POST['materia_6_n1'];
				$materia_7_n2 = $_POST['materia_7_n1'];
				$materia_8_n2 = $_POST['materia_8_n1'];
				$materia_9_n2 = $_POST['materia_9_n1'];
				$materia_10_n2 = $_POST['materia_10_n1'];
				$materia_11_n2 = $_POST['materia_11_n1'];
				$materia_12_n2 = $_POST['materia_12_n1'];
				$materia_13_n2 = $_POST['materia_13_n1'];
				$materia_14_n2 = $_POST['materia_14_n1'];
				
				$consulta = "UPDATE tecmu SET materia_1_n2='$materia_1_n2',materia_2_n2='$materia_2_n2',materia_3_n2='$materia_3_n2',materia_4_n2='$materia_4_n2',materia_5_n2='$materia_5_n2',materia_6_n2='$materia_6_n2',materia_7_n2='$materia_7_n2',materia_8_n2='$materia_8_n2',materia_9_n2='$materia_9_n2',materia_10_n2='$materia_10_n2',materia_11_n2='$materia_11_n2',materia_12_n2='$materia_12_n2',materia_13_n2='$materia_13_n2',materia_14_n2='$materia_14_n2',promocion='$promocion' WHERE DNI=$DNI";
				mysqli_query($conexion, $consulta);
				mysqli_close($conexion);
				?>
				<script>
				alert('generado exitosamente!')
					window.location.replace("../inicio.php");
					</script>
				<?php
			}else{
				?>
				<script>
					alert('El año seleccionado no coincide con el del alumno')
					window.location.replace("../inicio.php");
				</script>
				<?php
			}
	    }
	
?>