<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/estilos.css">
	<title>Mostrando peliculas JSON</title>
</head>

<body>

	<?php

	$archivo = 'peliculas.json';

	if (file_exists("$archivo")) {
		$x = fopen($archivo, 'r')
		or die("Error: No se puede abrir el archivo json");

		$size = filesize($archivo);

		$contenido = fread($x, $size);

		fclose($x);

		$listaPeliculas = json_decode($contenido, true);

		$numPeliculas = count($listaPeliculas);
	?>

	<div class="container">
		<h1 class="titulo">Lista de Peliculas</h1>
		<div class="table-responsive">
			<table class="table">

				<thead class="thead-dark">
					<tr>
						<th>Nombre</th>
						<th>Genero</th>
						<th>Duracion</th>
						<th>Clasificacion</th>
						<th>Protagonista</th>
					</tr>
				</thead>

				<tbody>

					<?php
					for ($i = 0; $i < $numPeliculas; $i++) {
						echo '<tr>';

						echo '<td>' . $listaPeliculas[$i]['nombre_pelicula'] . '</td>';
						echo '<td>' . $listaPeliculas[$i]['genero_pelicula'] . '</td>';
						echo '<td>' . $listaPeliculas[$i]['duracion_pelicula'] . '</td>';
						echo '<td>' . $listaPeliculas[$i]['clasificacion_pelicula'] . '</td>';
						echo '<td>' . $listaPeliculas[$i]['protagonista_pelicula'] . '</td>';
						echo '</tr>';
					} 
					?> 
				</tbody>
			</table>
		</div>
	</div>

	<?php
    } 
    ?>

</body>
</html>