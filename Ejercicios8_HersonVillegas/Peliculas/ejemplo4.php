<?php

$json = '{"id":"5467", "titulo":"La Campaña", "año":"2012", "genero":"Drama", "clasificacion":"B"}';
$json2 = '{"id":"1", "titulo":"Fury", "año":"2014", "genero":"Accion", "clasificacion":"B-15"}';
$json3 = '{"id":"2", "titulo":"Los dos Papas", "año":"2019", "genero":"Documental", "clasificacion":"A"}';

$arr = json_decode($json, true);
$arr2 = json_decode($json2, true);
$arr3 = json_decode($json3, true);

echo $arr["id"];
echo '<br>';
echo $arr["titulo"];
echo '<br>';
echo $arr["año"];
echo '<br>';
echo $arr["genero"];
echo '<br>';
echo $arr["clasificacion"];
echo '<br>';
echo '<br>';

echo $arr2["id"];
echo '<br>';
echo $arr2["titulo"];
echo '<br>';
echo $arr2["año"];
echo '<br>';
echo $arr2["genero"];
echo '<br>';
echo $arr2["clasificacion"];
echo '<br>';
echo '<br>';

echo $arr3["id"];
echo '<br>';
echo $arr3["titulo"];
echo '<br>';
echo $arr3["año"];
echo '<br>';
echo $arr3["genero"];
echo '<br>';
echo $arr3["clasificacion"];
echo '<br>';
echo '<br>';
?>