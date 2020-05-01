<?php

$json = '{"id":"1", "origen":"New York", "destino":"London", "duracion":"415"}';
$json2 = '{"id":"2", "origen":"Shangai", "destino":"Paris", "duracion":"760"}';
$json3 = '{"id":"3", "origen":"Istambul", "destino":"Tokyo", "duracion":"700"}';
$json4 = '{"id":"4", "origen":"New York", "destino":"Paris", "duracion":"435"}';
$json5 = '{"id":"5", "origen":"Moscow", "destino":"Paris", "duracion":"245"}';
$json6 = '{"id":"6", "origen":"Lima", "destino":"New York", "duracion":"455"}';

$obj = json_decode($json);
$obj2 = json_decode($json2);
$obj3 = json_decode($json3);
$obj4 = json_decode($json4);
$obj5 = json_decode($json5);
$obj6 = json_decode($json6);

echo $obj->id;
echo '<br>';
echo $obj->origen;
echo '<br>';
echo $obj->destino;
echo '<br>';
echo $obj->duracion;
echo '<br>';
echo '<br>';

echo $obj2->id;
echo '<br>';
echo $obj2->origen;
echo '<br>';
echo $obj2->destino;
echo '<br>';
echo $obj2->duracion;
echo '<br>';
echo '<br>';

echo $obj3->id;
echo '<br>';
echo $obj3->origen;
echo '<br>';
echo $obj3->destino;
echo '<br>';
echo $obj3->duracion;
echo '<br>';
echo '<br>';

echo $obj4->id;
echo '<br>';
echo $obj4->origen;
echo '<br>';
echo $obj4->destino;
echo '<br>';
echo $obj4->duracion;
echo '<br>';
echo '<br>';

echo $obj5->id;
echo '<br>';
echo $obj5->origen;
echo '<br>';
echo $obj5->destino;
echo '<br>';
echo $obj5->duracion;
echo '<br>';
echo '<br>';

echo $obj6->id;
echo '<br>';
echo $obj6->origen;
echo '<br>';
echo $obj6->destino;
echo '<br>';
echo $obj6->duracion;
echo '<br>';
echo '<br>';
?>