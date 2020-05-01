<?php

$miJson = '{"id":"5467", "titulo":"La Campaña", "año":"2012", "genero":"Drama", "clasificacion":"B"}';
$miJson2 = '{"id":"1", "titulo":"Fury", "año":"2014", "genero":"Accion", "clasificacion":"B-15"}';
$miJson3 = '{"id":"2", "titulo":"Los dos Papas", "año":"2019", "genero":"Documental", "clasificacion":"A"}';

$obj = json_decode($miJson, false);
$obj2 = json_decode($miJson2, false);
$obj3 = json_decode($miJson3, false);

var_dump($obj);
var_dump($obj2);
var_dump($obj3);
?>