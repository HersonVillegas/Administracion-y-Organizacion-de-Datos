<?php

$json = '{"Ndecontacto":"1",
            "nombre":"Herson", 
		    "apellidos":"Villegas", 
		    "FdN":"1997-08-17", 
		    "estadocivil":"Viudo", 
		    "origen":"Gomez Palacio", 
		    "email":"Herson@outlook.com", 
	        "redessociales":"Facebook"
	    }';

$json2 = '{"Ndecontacto":"2", 
		     "nombre":"Cristian", 
		     "apellidos":"Acosta", 
		     "FdN":"1997-08-07", 
		     "estadocivil":"Union Libre", 
		     "origen":"Matamoros", 
		     "email":"cristian@gmail.com", 
	         "redessociales":"Instagram"
	     }';

$json3 = '{"Ndecontacto":"3",
             "nombre":"Pancho", 
		     "apellidos":"Pantera", 
		     "FdN":"1989-02-01", 
		     "estadocivil":"Divorciado", 
		     "origen":"Tlahualilo", 
		     "email":"panchito@gmail.com", 
	         "redessociales":"Facebook"
	     }';

$json4 ='{"Ndecontacto":"4", 
		    "nombre":"Samuel", 
		    "apellidos":"Garcia", 
		    "FdN":"1999-03-05", 
		    "estadocivil":"Divorciado", 
		    "origen":"Gomez Palacio", 
		    "email":"shmuel@gmail.com", 
	        "redessociales":"Facebook, Instagram"
	}';

$json5 = '{"Ndecontacto":"5", 
		     "nombre":"David", 
		     "apellidos":"Ibarra", 
		     "FdN":"2000-10-08", 
		     "estadocivil":"Union Libre", 
		     "origen":"Gomez Palacio", 
		     "email":"tiri@outlook.com", 
	         "redessociales":"Facebook, Instagram"
	}';

$json6 ='{"Ndecontacto":"6", 
		    "nombre":"Jose", 
		    "apellidos":"Gomez", 
		    "FdN":"0001-10-10", 
		    "estadocivil":"Casado", 
		    "origen":"Lerdo", 
		    "email":"jose@gmail.com", 
	        "redessociales":"Facebook, Instagram"
	}';

$arr = json_decode($json, true);
$arr2 = json_decode($json2, true);
$arr3 = json_decode($json3, true);
$arr4 = json_decode($json4, true);
$arr5 = json_decode($json5, true);
$arr6 = json_decode($json6, true);

echo $arr["Ndecontacto"];
echo '<br>';
echo $arr["nombre"];
echo '<br>';
echo $arr["apellidos"];
echo '<br>';
echo $arr["FdN"];
echo '<br>';
echo $arr["estadocivil"];
echo '<br>';
echo $arr["origen"];
echo '<br>';
echo $arr["email"];
echo '<br>';
echo $arr["redessociales"];
echo '<br>';
echo '<br>';

echo $arr2["Ndecontacto"];
echo '<br>';
echo $arr2["nombre"];
echo '<br>';
echo $arr2["apellidos"];
echo '<br>';
echo $arr2["FdN"];
echo '<br>';
echo $arr2["estadocivil"];
echo '<br>';
echo $arr2["origen"];
echo '<br>';
echo $arr2["email"];
echo '<br>';
echo $arr2["redessociales"];
echo '<br>';
echo '<br>';

echo $arr3["Ndecontacto"];
echo '<br>';
echo $arr3["nombre"];
echo '<br>';
echo $arr3["apellidos"];
echo '<br>';
echo $arr3["FdN"];
echo '<br>';
echo $arr3["estadocivil"];
echo '<br>';
echo $arr3["origen"];
echo '<br>';
echo $arr3["email"];
echo '<br>';
echo $arr3["redessociales"];
echo '<br>';
echo '<br>';

echo $arr4["Ndecontacto"];
echo '<br>';
echo $arr4["nombre"];
echo '<br>';
echo $arr4["apellidos"];
echo '<br>';
echo $arr4["FdN"];
echo '<br>';
echo $arr4["estadocivil"];
echo '<br>';
echo $arr4["origen"];
echo '<br>';
echo $arr4["email"];
echo '<br>';
echo $arr4["redessociales"];
echo '<br>';
echo '<br>';

echo $arr5["Ndecontacto"];
echo '<br>';
echo $arr5["nombre"];
echo '<br>';
echo $arr5["apellidos"];
echo '<br>';
echo $arr5["FdN"];
echo '<br>';
echo $arr5["estadocivil"];
echo '<br>';
echo $arr5["origen"];
echo '<br>';
echo $arr5["email"];
echo '<br>';
echo $arr5["redessociales"];
echo '<br>';
echo '<br>';

echo $arr6["Ndecontacto"];
echo '<br>';
echo $arr6["nombre"];
echo '<br>';
echo $arr6["apellidos"];
echo '<br>';
echo $arr6["FdN"];
echo '<br>';
echo $arr6["estadocivil"];
echo '<br>';
echo $arr6["origen"];
echo '<br>';
echo $arr6["email"];
echo '<br>';
echo $arr6["redessociales"];
echo '<br>';
echo '<br>';
?>