<?php

$array=array("peliculas"=>array(
	array("id"=>"5467", "titulo"=>"La Campaña", "año"=>"2012", "genero"=>"Drama", "clasificacion"=>"B"),
	array("id"=>"1", "titulo"=>"Fury", "año"=>"2014", "genero"=>"Accion", "clasificacion"=>"B-15"),
	array("id"=>"2", "titulo"=>"Los dos Papas", "año"=>"2019", "genero"=>"Documental", "clasificacion"=>"A")
)

);
echo json_encode($array);
?>