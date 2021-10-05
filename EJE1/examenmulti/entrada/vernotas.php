<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloEntrada.css" media="all">
    <title>Entrada</title>

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
                    $carr = $_POST['carr'];
                    echo ($carr)
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
            <form action="./entra.php" method="post">
                <input type="hidden" id="usuario" name="usu" value="<?php echo $usu ?>">
                <input type="hidden" id="pass" name="pass" value="<?php echo $pass ?>">
                <button type="submit" class="button button5">Volver</button>
            </form>

        <?php
        }
        ?>

    </div>
    <div class="contenido">
        <div class="tnotas">
            <table id="not">
                <caption>Notas</caption>
                
                <tr>

                    <th>Sigla</th>
                    <th>Nombre</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota3</th>
                    <th>Nota Final</th>

                </tr>
                <?php
                $sql = "SELECT m.id_materia,m.sigla,m.nombre,t2.nota1,t2.nota2,t2.nota3,t2.nota_final from (SELECT n.nota1,n.nota2,n.nota3,n.nota_final,n.id_estudiante,n.id_materia FROM (SELECT * from estudiante e WHERE e.id_persona=" . $datos[4] . ")t1 INNER join nota n on t1.id_estudiante= n.id_estudiante)t2 INNER join materia m on t2.id_materia= m.id_materia";
                $res = mysqli_query($conn, $sql);
                while ($fila = mysqli_fetch_array($res)) {
                ?>

                    <tr>
                        <td align="center"><?php echo strtoupper($fila[1]) ?></td>
                        <td><?php echo strtoupper($fila[2]) ?></td>
                        <td align="center"><?php echo $fila[3] ?></td>
                        <td align="center"><?php echo $fila[4] ?></td>
                        <td align="center"><?php echo $fila[5] ?></td>
                        <td align="center"><?php echo $fila[6] ?></td>
                    </tr>
                <?php

                }
                /*
            echo ($datos[0]);
            if (!$datos) {
                echo 'No se encontro ningun usuario';
            } */
                ?>
            </table>
        </div>

    </div>



</body>

</html>