<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/estilos.css" />
	<title>Tabla de ventas</title>
</head>
<body>
	<div class="container">
		<h1 class="titulo">Ventas</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="thead-dark">

					<tr>
						<th>Cliente</th>
						<th>Zona</th>
						<th>Vendedor</th>
						<th>Trimestre</th>
						<th>Ventas</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$lista = array(
						array("Cliente 01", "Sur", "VEND-01", "1", "488,02 €"),
						array("Cliente 02", "Sur", "VEND-02", "2", "2.280,48 €"),
						array("Cliente 03", "Oeste", "VEND-03", "1", "938,03 €"),
						array("Cliente 04", "Oeste", "VEND-04", "2", "11.046,59 €"),
						array("Cliente 05", "Oeste", "VEND-05", "4", "115.261,95 €"),
						array("Cliente 06", "Oeste", "VEND-06", "3", "636,54 €"),
						array("Cliente 07", "Oeste", "VEND-07", "2", "32.700,32 €"),
						array("Cliente 08", "Oeste", "VEND-08", "3", "1.780,90 €"),
						array("Cliente 09", "Sur", "VEND-08", "4", "165.785,22 €"),
						array("Cliente 10", "Centro", "VEND-09", "1", "57.748,99 €"),
						array("Cliente 11", "Oeste", "VEND-10", "3", "81.140,29 €"),
						array("Cliente 12", "Centro", "VEND-01", "2", "164,71 €")
					);

					$tam = count($lista);

					for ($r = 0; $r < $tam; $r++) {
						echo "<tr>";
						echo "<td>" . $lista[$r][0] . "</td>";
						echo "<td>" . $lista[$r][1] . "</td>";
						echo "<td>" . $lista[$r][2] . "</td>";
						echo "<td>" . $lista[$r][3] . "</td>";
						echo "<td>" . $lista[$r][4] . "</td>";
						echo "</tr>";
					}

					?>
				</tfoot>
				<caption>Ventas totales de los clientes</caption>
			</table>
		</div>
	</div>
</body>
</html>