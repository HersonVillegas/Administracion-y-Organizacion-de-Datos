<?php

$json = '{"id":"1", "origen":"New York", "destino":"London", "duracion":"415"}';
$json2 = '{"id":"2", "origen":"Shangai", "destino":"Paris", "duracion":"760"}';
$json3 = '{"id":"3", "origen":"Istambul", "destino":"Tokyo", "duracion":"700"}';
$json4 = '{"id":"4", "origen":"New York", "destino":"Paris", "duracion":"435"}';
$json5 = '{"id":"5", "origen":"Moscow", "destino":"Paris", "duracion":"245"}';
$json6 = '{"id":"6", "origen":"Lima", "destino":"New York", "duracion":"455"}';

$arr = json_decode($json, true);
$arr2 = json_decode($json2, true);
$arr3 = json_decode($json3, true);
$arr4 = json_decode($json4, true);
$arr5 = json_decode($json5, true);
$arr6 = json_decode($json6, true);

echo $arr["id"];
echo '<br>';
echo $arr["origen"];
echo '<br>';
echo $arr["destino"];
echo '<br>';
echo $arr["duracion"];
echo '<br>';
echo '<br>';

echo $arr2["id"];
echo '<br>';
echo $arr2["origen"];
echo '<br>';
echo $arr2["destino"];
echo '<br>';
echo $arr2["duracion"];
echo '<br>';
echo '<br>';

echo $arr3["id"];
echo '<br>';
echo $arr3["origen"];
echo '<br>';
echo $arr3["destino"];
echo '<br>';
echo $arr3["duracion"];
echo '<br>';
echo '<br>';

echo $arr4["id"];
echo '<br>';
echo $arr4["origen"];
echo '<br>';
echo $arr4["destino"];
echo '<br>';
echo $arr4["duracion"];
echo '<br>';
echo '<br>';

echo $arr5["id"];
echo '<br>';
echo $arr5["origen"];
echo '<br>';
echo $arr5["destino"];
echo '<br>';
echo $arr5["duracion"];
echo '<br>';
echo '<br>';

echo $arr6["id"];
echo '<br>';
echo $arr6["origen"];
echo '<br>';
echo $arr6["destino"];
echo '<br>';
echo $arr6["duracion"];
echo '<br>';
echo '<br>';
?>