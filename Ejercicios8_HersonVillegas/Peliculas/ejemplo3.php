<?php

$json = '{"id":"5467", "titulo":"La Campaña", "año":"2012", "genero":"Drama", "clasificacion":"B"}';
$json2 = '{"id":"1", "titulo":"Fury", "año":"2014", "genero":"Accion", "clasificacion":"B-15"}';
$json3 = '{"id":"2", "titulo":"Los dos Papas", "año":"2019", "genero":"Documental", "clasificacion":"A"}';

$obj = json_decode($json);
$obj2 = json_decode($json2);
$obj3 = json_decode($json3);

echo $obj->id;
echo '<br>';
echo $obj->titulo;
echo '<br>';
echo $obj->año;
echo '<br>';
echo $obj->genero;
echo '<br>';
echo $obj->clasificacion;
echo '<br>';
echo '<br>';

echo $obj2->id;
echo '<br>';
echo $obj2->titulo;
echo '<br>';
echo $obj2->año;
echo '<br>';
echo $obj2->genero;
echo '<br>';
echo $obj2->clasificacion;
echo '<br>';
echo '<br>';

echo $obj3->id;
echo '<br>';
echo $obj3->titulo;
echo '<br>';
echo $obj3->año;
echo '<br>';
echo $obj3->genero;
echo '<br>';
echo $obj3->clasificacion;
?>