<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Modificar usuarios</title>
</head>

<body>
    <h2>Modificar usuario</h2>
    <? print_r($mod) ?>
    <form action="" method="POST">
        <td>
            <label for="">Email:</label>
            <input type="email" name="email" value="<?= $mod[0]->usu?>" />

        </td>
        <td>
            <br><br>
            <label for="">Ci:</label>
            <input type="text" name="ci" value="<?= $mod[0]->ci?>" />
        </td>
        <td>
            <br><br>
            <label for="">Nombre:</label>
            <input type="text" name="nombre" value="<?= $mod[0]->nombre?>" />
        </td>
        <td>
            <br><br>
            <label for="">Carrera:</label>
            <select name="carrera">
                <option value="informatica" selected>informatica</option>
                <option value="estadistica">estadistica</option>
                <option value="matematica">matematica</option>
            </select>
        </td>
        <td>
            <br><br>
            <label for="">Password:</label>
            <input type="text" name="passw" value="<?= $mod[0]->pass?>" />
        </td>
        <td>
            <br><br>
            <label for="">Departamento:</label>
            <select name="departa">
                <option value="La Paz" selected>La Paz</option>
                <option value="Chuquisaca">Chuquisaca</option>
                <option value="Cochabamba">Cochabamba</option>
                <option value="Oruro">Oruro</option>
                <option value="Potosí">Potosí</option>
                <option value="Tarija">Tarija</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="Beni">Beni</option>
                <option value="Pando">Pando</option>
            </select>
        </td>
        <td>
            <br><br>
            <label for="">Fecha de nacimiento:</label>
            <input type="text" name="fecha_nac" value="<?= $mod[0]->fecha_nac?>" />
        </td>
        <td>
            <input type="submit" name="submit" value="modificar" />
        </td>
    </form>
    <a href="<?= base_url() ?>">Volver</a>
</body>

</html>