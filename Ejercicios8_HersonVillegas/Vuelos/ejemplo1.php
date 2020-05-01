<?php

$miJson = '{"id":"1", "origen":"New York", "destino":"London", "duracion":"415"}';
$miJson2 = '{"id":"2", "origen":"Shangai", "destino":"Paris", "duracion":"760"}';
$miJson3 = '{"id":"3", "origen":"Istambul", "destino":"Tokyo", "duracion":"700"}';
$miJson4 = '{"id":"4", "origen":"New York", "destino":"Paris", "duracion":"435"}';
$miJson5 = '{"id":"5", "origen":"Moscow", "destino":"Paris", "duracion":"245"}';
$miJson6 = '{"id":"6", "origen":"Lima", "destino":"New York", "duracion":"455"}';

$obj = json_decode($miJson, false);
$obj2 = json_decode($miJson2, false);
$obj3 = json_decode($miJson3, false);
$obj4 = json_decode($miJson4, false);
$obj5 = json_decode($miJson5, false);
$obj6 = json_decode($miJson6, false);

var_dump($obj);
var_dump($obj2);
var_dump($obj3);
var_dump($obj4);
var_dump($obj5);
var_dump($obj6);
?>