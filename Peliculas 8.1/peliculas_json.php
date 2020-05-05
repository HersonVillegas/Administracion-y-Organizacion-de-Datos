<?php

require_once('./ClassPelicula.php');

$archivo_json = "peliculas.json";

$pelicula1 = new Peliculas(
	"Los dos papas",
	"Documental",
	"125 minutos",
	"A",
	"Anthony Hopkins y Jonathan Pryce"
);

$pelicula2 = new Peliculas(
	"Fury",
	"Accion",
	"134 minutos",
	"B-15",
	"Brad Pitt"
);

$peliculas = array();

$peliculas[] = $pelicula1;

$peliculas[] = $pelicula2;

$json_string = json_encode($peliculas);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
	echo ( "Error al abrir el archivo" );
	exit();
}

fwrite($arch,$json_string);

fclose($arch);

echo '<h3>Datos escritos en peliculas.json </h3>';

header("refresh:2;url=mostrar_json.php");