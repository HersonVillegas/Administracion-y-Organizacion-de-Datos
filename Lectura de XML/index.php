<?php
$archivo = "empleados.xml";

if (file_exists($archivo)) {

	$xml = simplexml_load_file($archivo)
	or die("Error: No se puede crear el objeto SimpleXMLElement");

	echo '<h2>Lista de Empleados</h2>';

	$lista = $xml->registro;

	$numEmpleados = count($lista);

	for ($i = 0; $i < $numEmpleados; $i++) {

    echo '<b>Número de manager:</b> ' . $lista[$i]->attributes()->manager . '<br>';
    
    echo '<b>Nombre:</b> ' . $lista[$i]->nombre . '<br>';
    
    echo '<b>Puesto:</b> ' . $lista[$i]->puesto . '<br><br>';
   }
}