<?php $fecha = Date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border-collapse: collapse;
            border: 2px solid rgb(200, 200, 200);
            letter-spacing: 1px;
            font-size: 0.7rem;

        }

        .texto {
            font-size: 0.7rem;
            margin: 0px;
            padding: 0px
        }

        p {
            margin: 0px;
        }

        td,
        th {
            border: 1px solid rgb(190, 190, 190);
            padding: 2px 1px 2px 3px;
        }

        .texto-center {
            text-align: center;
        }

        .texto-start {
            text-align: start;
        }

        .texto-final {
            font-size: 0.6rem;
        }

        tr:nth-child(even) td,
        th {
            background-color: rgb(250, 250, 250);
        }

        tr:nth-child(odd) td {
            background-color: rgb(245, 245, 245);
        }

        .hola {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <?php
    $materiasPorCiclo = [
        1 => ["PRACTICAS DE LENGUAJE", "MATEMATICAS", "CIENCIAS NATURALES", "CIENCIAS SOCIALES", "INGLÉS", "EDUCACIÓN FÍSICA", "EDUCACIÓN ARTÍSTICA", "CONSTRUCCIÓN DE LA CIUDADANÍA", "LENGUAJE TECNOLÓGICO", "PROCESOS TECNOLÓGICOS", "SISTEMAS TECNOLÓGICOS"],
        2 => ["PRÁCTICAS DEL LENGUAJE", "MATEMÁTICAS", "HISTORIA", "GEOGRAFÍA", "BIOLOGÍA", "FISICOQUÍMICA", "INGLÉS", "EDUCACIÓN FÍSICA", "EDUCACIÓN ARTÍSTICA", "CONSTRUCCIÓN DE LA CIUDADANÍA", "LENGUAJE TECNOLÓGICO", "PROCESOS TECNOLÓGICOS", "SISTEMAS TECNOLÓGICOS"],
        4 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "SALUD Y ADOLESCENCIA", "HISTORIA", "GEOGRAFÍA", "MATEMÁTICA CICLO SUP.", "FÍSICA", "QUÍMICA", "LENGUAJES ARTIS/MUSIC", "GUION", "MORFOLOGÍA VISUAL", "MORFOLOGÍA SONORA", "INTROD. A LOS MULTIMED."],
        5 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "POLÍTICA Y CIUDADANÍA", "HISTORIA", "GEOGRAFÍA", "ANÁLISIS MATEMÁTICO", "COMUNICACIÓN", "METODOLOGÍA DE LA INVESTIGACIÓN", "LENGUAJES ARTIS/PLÁSTICA", "GUION", "GRÁFICA EDITORIAL", "TECNOLOGÍA DEL SONIDO", "SISTEMAS MULTIMEDIALES"],
        6 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "FILOSOFÍA", "ARTE", "MATEMÁTICA APLICADA", "LENG. ARTIST./TEATRO Y DISEÑ. ESCENOGR.", "GESTIÓN DE PROYECTOS", "DISEÑO GRÁFICO", "DERECHOS DEL TRABAJADOR", "SÍNTESIS DE IMAGEN Y ANIMACIÓN", "REALIZACIÓN AUDIOVISUAL", "SISTEMAS MULTIMEDIALES"],
        7 => ["PRÁCTICAS PROF./MULTIMEDIAL", "EMPRENDIM. PRODUC. Y DESARR. LOCAL", "TEORÍA DE LA COMUNICACIÓN", "ÉTICA Y DEONTOLOGÍA PROFESIONAL", "MARKETING DE SERVICIOS", "REALIZACIÓN AUDIOVISUAL", "ARTE DIGITAL Y DISEÑO WEB", "TECNOLOGÍA Y PRODUCCIÓN GRÁFICA"],
        8 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "SALUD Y ADOLESCENCIA", "HISTORIA", "GEOGRAFÍA", "MATEMÁTICA CICLO SUP.", "FÍSICA", "QUÍMICA", "TECNOLOGÍAS ELECTRÓNICAS", "LABORATORIO DE PROGRAMACIÓN", "LABORATORIO DE HARDWARE", "LABORATORIO DE SIST. OPERATIVOS", "LABORATORIO DE APLICACIONES"],
        9 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "POLÍTICA Y CIUDADANÍA", "HISTORIA", "GEOGRAFÍA", "ANÁLISIS MATEMÁTICO", "SISTEMAS DIGITALES", "BASE DE DATOS", "MODELOS Y SISTEMAS", "LABORATORIO DE PROGRAMACIÓN ||", "LABORATORIO DE REDES INFORMÁTICAS", "LABORATORIO DE DISEÑO WEB", "LAB. DE DISEÑO DE BASE DE DATOS"],
        10 => ["LITERATURA", "INGLÉS", "EDUCACIÓN FÍSICA", "FILOSOFÍA", "ARTE", "MATEMÁTICA DISCRETA", "SISTEMAS DIGITALES", "GESTIÓN Y AUTOGESTIÓN", "SEGURIDAD INFORMÁTICA", "DERECHOS DEL TRABAJADOR", "LAB. DE PROGRAMACIÓN |||", "LAB. DE PROC. INDUSTR.", "DESAR. DE APP. WEB ESTÁTICAS", "DESAR. DE APP. WEB DINÁMICAS"],
        11 => ["PRÁCTICAS PROF./PROGRAMACIÓN", "EMPRENDIM. PRODUC. Y DESARR. LOCAL", "EVALUAC. DE PROYEC.", "MODELOS Y SISTEMAS", "ORGANIZACIÓN Y MÉTODOS", "SISTEMAS COMPUTACIONALES", "DESARR. DE SOFTWARE PARA PLATAF. MOVILES", "IMPLEMEN. DE SITIOS WEB DINÁMICOS"]
    ];
    $materiasT1 = [];
    $materiasT2 = [];
    include("../../db.php");


    $query = mysqli_query($conexion, "SELECT * FROM `tecmu` WHERE DNI='$dni'");

    while ($fetch = mysqli_fetch_array($query)) {
        // Iterar sobre las materias y niveles
        if ($fetch['AÑO'] > 0 && $fetch['AÑO'] <= 3) {
            $fetch['AÑO'] = ($fetch['AÑO'] == 3) ? 2 : $fetch['AÑO'];
            $materiasArray = $materiasPorCiclo[$fetch['AÑO']];
        } elseif ($fetch['AÑO'] > 3 && $fetch['ciclo'] == "tecmu") {
            $materiasArray = $materiasPorCiclo[$fetch['AÑO']];
        } elseif ($fetch['AÑO'] > 3 && $fetch['ciclo'] == "tecpro") {
            $materiasArray = $materiasPorCiclo[(int) $fetch['AÑO'] + 4];
        }
        ?>
        <table width=100% style="border:1px solid transparent; ">
            <tr>
                <td colspan=2 style="background:white; border:1px solid transparent; padding:0px; margin:0px;">
                    <div>
                        <center>
                            <div class=hola style="display:inline-block; text-align:right; transform: translateY(-13px);">
                                <p><b>
                                        <?php echo $fecha; ?> A&Ntilde;O DEL BICENTENARIO
                                    </b></p>
                                <p>DE LA PROVINCIA DE BUENOS AIRES</p>
                            </div>
                            <img src="../../img/buenosAires.png" width=130 alt="">
                        </center>

                    </div>
                </td>
            </tr>
            <tr>
                <td style="background:white; border:1px solid transparent; padding:0px; margin:0px;">
                    <div class="texto" style="transform: translateY(-33px);">
                        <p>ESCUELA: E.E.S.T.N&ordm;3 "NIKOLA TESLA"</p>
                        <p>CICLO LECTIVO:
                            <?php echo $fecha; ?>
                        </p>
                        <p>ESTUDIANTE:
                            <?php echo $fetch['Nombre'];
                            echo " ";
                            echo $fetch['Apellido']; ?>
                        </p>
                    </div>
                </td>

                <td style="background:white; border:1px solid transparent; padding:0px; margin:0px; text-align:right;">
                    <div class="texto" style="transform: translateY(-33px);">
                        <p>DISTRITO: NECOCHEA</p>
                        <p>CURSO:
                            <?php echo $fetch['CURSO'] ?>
                        </p>
                        <p>DNI:
                            <?php echo $fetch['DNI'] ?>
                        </p>
                </td>
                </div>
                </td>
            </tr>
        </table>
        <table class=tabla style="transform: translateY(-33px);">
            <thead>
                <tr>
                    <th class="texto-center" rowspan=2 style="width:300px">MATERIAS</th>
                    <td colspan=4 class="hola texto-center ">ESTADO/SITUACION DE LA TRAYECTORIA</td>
                    <td colspan=4 class="hola texto-center ">CALIFICACION FINAL (NUMERICA)</td>
                    <td colspan=2 rowspan=2 style="width:300px" class="texto-center">OBSERVACIONES</td>
                </tr>
                <tr>

                    <td colspan=2 style="width:250px" class="texto-center">1&ordm; CUATRIMESTRE</td>
                    <td colspan=2 class="texto-center" style="width:250px">2&ordm; CUATRIMESTRE</td>
                    <td class="texto-center">Cierre anual</td>
                    <td class="texto-center">Intens. Dic.
                        <?php echo $fecha; ?>
                    </td>
                    <td class="texto-center">Intens. Feb-marzo
                        <?php echo $fecha + 1; ?>
                    </td>
                    <td class="texto-center" style="width:60px">Calif def</td>

                </tr>
            </thead>
            <tbody>

                <?php
                $longitud = count($materiasArray);
                for ($i = 1; $i <= $longitud; $i++) {
                    $materia = $fetch["materia_{$i}_n1"];
                    $materiasT1[] = $materia;

                    $materia = $fetch["materia_{$i}_n2"];
                    $materiasT2[] = $materia;
                    echo "<tr>";
                    echo "<td class='texto-start'>";
                    echo $materiasArray[$i - 1];
                    "</td>";
                    echo "<td  colspan=2 class='texto-center'>";
                    echo $fetch["materia_{$i}_n1"];
                    "</td>";
                    echo "<td colspan=2 class='texto-center'>";
                    if ($fetch["materia_{$i}_n2"] == null) {
                        echo "";
                    } else {
                        echo $fetch["materia_{$i}_n2"];
                    }
                    echo "</td>";
                    echo "<td class='texto-center'>";
                    if ($fetch["materia_{$i}_n2"] == null) {
                    } else {
                        if (is_numeric($fetch["materia_{$i}_n1"]) && is_numeric($fetch["materia_{$i}_n2"])) {
                            echo ($fetch["materia_{$i}_n1"] + $fetch["materia_{$i}_n2"]) / (2);
                        } else {
                        }
                    }
                    "</td>";
                    echo "<td  class='texto-center'></td>";
                    echo "<td  class='texto-center'></td>";
                    echo "<td  class='texto-center'>";
                    if ($fetch["materia_{$i}_n2"] == null) {
                    } else {
                        if (is_numeric($fetch["materia_{$i}_n1"]) && is_numeric($fetch["materia_{$i}_n2"])) {
                            echo round(($fetch["materia_{$i}_n1"] + $fetch["materia_{$i}_n2"]) / (2));
                        } else {
                        }
                    }
                    "</td>";
                    echo "<td colspan=2 class='texto-center'></td>";
                    ;
                    echo "</tr>";
                }



                // $materias ahora contiene todas las materias
            
                ?>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td colspan=1 style=width:220px>Notificación</td>
                    <td colspan=2 class="texto-center" style=width:200px>1&ordm; CUATRIMESTRE</td>
                    <td colspan=2 class="texto-center" style=width:200px>2&ordm; CUATRIMESTRE</td>
                    <td colspan=3 class="texto-center" style=width:200px>CALIFICACION FINAL</td>
                    <td colspan=3 class="texto-center" style=width:180px>CALIFICACION DEFINITIVA</td>
                </tr>
                <tr>
                    <td>Firma del Equipo Directivo</td>
                    <td colspan=2></td>
                    <td colspan=2></td>
                    <td colspan=3></td>
                    <td colspan=3></td>
                </tr>
                <tr>
                    <td>Firma del adulto/a responsable</td>
                    <td colspan=2></td>
                    <td colspan=2></td>
                    <td colspan=3></td>
                    <td colspan=3></td>
                </tr>
                <tr>
                    <td>Firma del estudiante</td>
                    <td colspan=2></td>
                    <td colspan=2></td>
                    <td colspan=3></td>
                    <td colspan=3></td>
                </tr>
                <tr>
                    <td colspan=11></td>
                </tr>
                <tr>
                    <td class="texto-center">MATERIAS PENDIENTES</td>
                    <td class="texto-center">A&Ntilde;O</td>
                    <td class="texto-center">FECHA</td>
                    <td class="texto-center">NOTA</td>
                    <td class="texto-center">LIBRO Y FOLIO</td>
                    <td class="texto-center" colspan=2>EQUIVALENCIAS</td>
                    <td class="texto-center">A&Ntilde;O</td>
                    <td class="texto-center">FECHA</td>
                    <td class="texto-center">NOTA</td>
                    <td class="texto-center">LIBRO Y FOLIO</td>
                </tr>
                <tr>
                    <td style="height:12px; font-size:12px;">
                        <?php echo "" . $fetch['adeuda_1'] ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan=2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;">
                        <?php echo "" . $fetch['adeuda_2'] ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan=2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;">
                        <?php echo "" . $fetch['adeuda_3'] ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan=2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan=2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="height:12px;  font-size:12px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan=2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>PROMUEVE A:</b></td>
                    <td colspan=10 class="texto-center">
                        <?php echo $fetch['promocion'] . "°"; ?>
                    </td>

                </tr>
                <?php
    }
    ?>
        </tbody>
    </table>
    <div class="texto-final" style="transform: translateY(0px);">
        <p>Trayectoria educativa avanzada (TEA), corresponde a las y los estudiantes que alcanzaron los aprendizajes
            correspondientes y sostuvieron una buena vinculación pedagógica.</p>
        <p>Trayectoria educativa en proceso (TEP), corresponde a las y los estudiantes que no han alcanzado de forma
            suficiente los aprendizajes correspondientes, pero que mantienen una buena vinculación pedagógica.</p>
        <p>Trayectoria educativa discontinua (TED), corresponde a las y los estudiantes que no han alcanzado los
            aprendizajes correspondientes y que tuvieron una escasa vinculación pedagógica, ya que los registros de los
            avances respecto a los contenidos enseñados han tenido interrupciones o son de baja intensidad.</p>
    </div>


</body>

</html>