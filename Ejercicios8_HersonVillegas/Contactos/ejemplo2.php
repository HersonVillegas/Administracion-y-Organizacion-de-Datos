<?php

$miJson = '{"N.# de contacto":"1",
            "nombre":"Herson", 
		    "apellidos":"Villegas", 
		    "FdN":"1997-08-17", 
		    "estado civil":"Viudo", 
		    "origen":"Gomez Palacio", 
		    "email":"Herson@outlook.com", 
	        "redes sociales":"Facebook"
	    }';

$miJson2 = '{"N.# de contacto":"2", 
		     "nombre":"Cristian", 
		     "apellidos":"Acosta", 
		     "FdN":"1997-08-07", 
		     "estado civil":"Union Libre", 
		     "origen":"Matamoros", 
		     "email":"cristian@gmail.com", 
	         "redes sociales":"Instagram"
	     }';

$miJson3 = '{"N.# de contacto":"3",
             "nombre":"Pancho", 
		     "apellidos":"Pantera", 
		     "FdN":"1989-02-01", 
		     "estado civil":"Divorciado", 
		     "origen":"Tlahualilo", 
		     "email":"panchito@gmail.com", 
	         "redes sociales":"Facebook"
	     }';

$miJson4 ='{"N.# de contacto":"4", 
		    "nombre":"Samuel", 
		    "apellidos":"Garcia", 
		    "FdN":"1999-03-05", 
		    "estado civil":"Divorciado", 
		    "origen":"Gomez Palacio", 
		    "email":"shmuel@gmail.com", 
	        "redes sociales":"Facebook, Instagram"
	}';

$miJson5 = '{"N.# de contacto":"5", 
		     "nombre":"David", 
		     "apellidos":"Ibarra", 
		     "FdN":"2000-10-08", 
		     "estado civil":"Union Libre", 
		     "origen":"Gomez Palacio", 
		     "email":"tiri@outlook.com", 
	         "redes sociales":"Facebook, Instagram"
	}';

$miJson6 ='{"N.# de contacto":"6", 
		    "nombre":"Jose", 
		    "apellidos":"Gomez", 
		    "FdN":"0001-10-10", 
		    "estado civil":"Casado", 
		    "origen":"Lerdo", 
		    "email":"jose@gmail.com", 
	        "redes sociales":"Facebook, Instagram"
	}';

$obj = json_decode($miJson, true);
$obj2 = json_decode($miJson2, true);
$obj3 = json_decode($miJson3, true);
$obj4 = json_decode($miJson4, true);
$obj5 = json_decode($miJson5, true);
$obj6 = json_decode($miJson6, true);

var_dump($obj);
var_dump($obj2);
var_dump($obj3);
var_dump($obj4);
var_dump($obj5);
var_dump($obj6);
?>