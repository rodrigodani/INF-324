<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
    <link rel="stylesheet" href="estiloEntrada.css">
</head>

<body>
    <div class="bar">
        <div class="titulo">
            BIENVENIDO A LA FACULTAD DE CIENCIAS PURAS Y NATURALES
        </div>

    </div>
    <div class="des">
        <div class="descrip">
            <?php
            $usu = $_POST['usu'];
            $pass = $_POST['pass'];
            $conn = mysqli_connect("127.0.0.1", "root", "");
            mysqli_select_db($conn, "bdcori");
            $sql = "SELECT * from (SELECT * from usuario u WHERE usu='" . $usu . "' and pass='" . $pass . "') as us INNER JOIN persona p on us.id_persona = p.id_persona ";

            $resultado = mysqli_query($conn, $sql);
            $datos = mysqli_fetch_array($resultado);


            /* print_r($datos);
            echo ($datos[0]);
            if (!$datos) {
                echo 'No se encontro ningun usuario';
            } */
            ?>
            <?php
            if ($datos[3] == 2) {
            ?>
                <h4>
                    Estudiante:
                    <?php
                    echo ($datos[6])

                    ?>
                </h4>
                <h4>
                    Carrera:
                    <?php
                    $sql = "select * from estudiante e where e.id_persona=" . $datos[5];
                    $resultado = mysqli_query($conn, $sql);
                    $carrera = mysqli_fetch_array($resultado);
                    echo ($carrera[2])
                    ?>
                </h4>
                <h4>
                    CI:
                    <?php
                    echo ($datos[7])
                    ?>
                </h4>

            <?php
            }
            ?>
            <?php
            if ($datos[3] == 1) {
            ?>
                <h4>
                    Docente:
                    <?php
                    echo ($datos[6])
                    ?>
                </h4>
                <h4>
                    CI:
                    <?php
                    echo ($datos[7])
                    ?>
                </h4>
            <?php
            }
            ?>

        </div>
    </div>
    <div class="descrip">
        <?php
        if ($datos[3] == 2) {
        ?>
            <form action="./vernotas.php" method="POST">
                <input type="hidden" id="carr" name="carr" value="<?php echo $carrera[2] ?>">
                <input type="hidden" id="usuario" name="usu" value="<?php echo $usu ?>">
                <input type="hidden" id="pass" name="pass" value="<?php echo $pass ?>">
                <button type="submit" class="button button5">Notas</button>
            </form>

        <?php
        }
        ?>

    </div>
    <div class="contenido">
        <?php
        if ($datos[3] == 1) {
            $sql = "SELECT t3.cod_depart,avg(n.nota_final) from (SELECT e.id_estudiante, t2.cod_depart from 
            (SELECT p.id_persona,p.cod_depart from 
            (SELECT u.id_persona from usuario u WHERE u.rol=2)t1 
            INNER JOIN persona p on t1.id_persona = p.id_persona)t2 
            INNER join estudiante e on t2.id_persona = e.id_persona)t3 
            LEFT JOIN nota n on n.id_estudiante = t3.id_estudiante GROUP by t3.cod_depart";

            $res = mysqli_query($conn, $sql);
            $mediaDep = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
            while ($fila = mysqli_fetch_array($res)) {

                switch ($fila[0]) {
                    case '01':
                        $mediaDep[0] = $fila[1];
                        break;
                    case '02':
                        $mediaDep[1] = $fila[1];
                        break;
                    case '03':
                        $mediaDep[2] = $fila[1];
                        break;
                    case '04':
                        $mediaDep[3] = $fila[1];
                        break;
                    case '05':
                        $mediaDep[4] = $fila[1];
                        break;
                    case '06':
                        $mediaDep[5] = $fila[1];
                        break;
                    case '07':
                        $mediaDep[6] = $fila[1];
                        break;
                    case '08':
                        $mediaDep[7] = $fila[1];
                        break;
                    case '09':
                        $mediaDep[8] = $fila[1];
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }
        ?>


        <div class="tprom">

            <table class="prom">
                <caption>Promedio de notas por departamentos</caption>
                <tr>
                    <th>Chuquisaca</th>
                    <th>La Paz</th>
                    <th>Cochabamba</th>
                    <th>Oruro</th>
                    <th>Potosí</th>
                    <th>Tarija</th>
                    <th>Santa Cruz</th>
                    <th>Beni</th>
                    <th>Pando</th>
                </tr>
                <tr>
                    <th><?php echo (round($mediaDep[0], 2)) ?></th>
                    <th><?php echo (round($mediaDep[1], 2)) ?></th>
                    <th><?php echo (round($mediaDep[2], 2)) ?></th>
                    <th><?php echo (round($mediaDep[3], 2)) ?></th>
                    <th><?php echo (round($mediaDep[4], 2)) ?></th>
                    <th><?php echo (round($mediaDep[5], 2)) ?></th>
                    <th><?php echo (round($mediaDep[6], 2)) ?></th>
                    <th><?php echo (round($mediaDep[7], 2)) ?></th>
                    <th><?php echo (round($mediaDep[8], 2)) ?></th>
                </tr>

            </table>
        </div>


    </div>



</body>

</html>