<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Eje5</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		#docentes {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			font-size: 20px;
		}

		#docentes td,
		#docentes th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#docentes tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#docentes tr:hover {
			background-color: #ddd;
		}

		#docentes th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}

		.button {
			background-color: #4CAF50;
			/* Green */
			border: none;
			color: white;
			padding: 10px 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
		}

		.button2 {
			background-color: #008CBA;
		}

		/* Blue */
		.button3 {
			background-color: #f44336;
		}

		.button1 {
			background-color: #ff6f00;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>Docentes</h1>
		<form action="<?= "http://localhost/examenmulticode/index.php/Docente/add" ?>" method="post">
			<td></td>
			<td>
				<label for="">Email:</label>
				<input type="email" name="email" />

			</td>
			<td>
				<br><br>
				<label for="">Ci:</label>
				<input type="text" name="ci" />
			</td>
			<td>
				<br><br>
				<label for="">Nombre:</label>
				<input type="text" name="nombre" />
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
				<input type="text" name="passw" />
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
				<input type="text" name="fecha_nac" />
			</td>
			<td>
				<input type="submit" name="submit" value="Añadir" />
			</td>
		</form>



		<table id="docentes">
			<tr>
				<th>Nombre</th>
				<th>Ci</th>
				<th>Carrera</th>
				<th>Departamento</th>
				<th>Opciones</th>

			</tr>

			<?php
			print_r("docentes");
			foreach ($docentes  as $docente) {
			?>

				<tr>
					<td><?php echo ($docente->nombre) ?></td>
					<td><?php echo ($docente->ci) ?></td>
					<td><?php echo ($docente->carrera) ?></td>
					<td>
						<?php
						switch ($docente->cod_depart) {
							case "01":
								$cod_dep = 'Chuquisaca';
								break;
							case "02":
								$cod_dep = 'La Paz';
								break;
							case "03":
								$cod_dep = 'Cochabamba';
								break;
							case "04":
								$cod_dep = 'Oruro';
								break;
							case "05":
								$cod_dep = 'Potosi';
								break;
							case "06":
								$cod_dep = 'Tarija';
								break;
							case "07":
								$cod_dep = 'Santa Cruz';
								break;
							case "08":
								$cod_dep = 'Beni';
								break;
							case "09":
								$cod_dep = 'Pando';
								break;
							default:
								# code...
								break;
						};
						echo ($cod_dep);
						?></td>
					<td>
						<a href="<?= ("http://localhost/examenmulticode/index.php/Docente/mod/" . $docente->id_persona) ?>"><button class="button button2">Modificar</button></a>
						<a href="<?= ("http://localhost/examenmulticode/index.php/Docente/eli/" . $docente->id_persona) ?>"><button class="button button3">eliminar</button></a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>

</body>

</html>