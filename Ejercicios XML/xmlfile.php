<?php
$nombreArchivo = "biblioteca.xml";

if (file_exists($nombreArchivo)){
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error: No se puede crear el objeto SimpleXMLElement");
    var_dump($miXML);

    var_dump($miXML->libro[0]);
    var_dump($miXML->libro[1]);
    var_dump($miXML->libro[2]);

    var_dump($miXML->libro[0]->attributes());
    var_dump($miXML->libro[1]->attributes());
    var_dump($miXML->libro[2]->attributes());

    echo ($miXML->libro[0]->attributes()->isbn);
    echo('<br>');
   
    echo ($miXML->libro[1]->attributes()->isbn);
    echo('<br>');

    echo ($miXML->libro[2]->attributes()->isbn);
    echo('<br>');
    echo('<br>');

    echo ($miXML->libro[0]->autor);
    echo('<br>');

    echo ($miXML->libro[1]->autor);
    echo('<br>');

    echo ($miXML->libro[2]->autor);
    echo('<br>');
    echo('<br>');

    $nombreLibro1 = $miXML->libro[0]->titulo;
    $precioLibro1 = $miXML->libro[0]->precio;
    $modedaLibro1 = $miXML->libro[0]->precio->attributes()['moneda'];

    $nombreLibro2 = $miXML->libro[1]->titulo;
    $precioLibro2 = $miXML->libro[1]->precio;
    $modedaLibro2 = $miXML->libro[1]->precio->attributes()['moneda'];

    $nombreLibro3 = $miXML->libro[2]->titulo;
    $precioLibro3 = $miXML->libro[2]->precio;
    $modedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];

    echo ("El primer libro \"" . $nombreLibro1 . "\"cuesta " . $precioLibro1 . " en " . $modedaLibro1);
    echo('<br>');

    echo ("El segundo Libro \"" . $nombreLibro2 . "\"cuesta " . $precioLibro1 . " en " . $modedaLibro1);
    echo('<br>');

    echo ("El tercer Libro \"" . $nombreLibro3 . "\"cuesta " . $precioLibro3 . " en " . $modedaLibro3);
    echo('<br>');
    echo('<br>');
}

?>