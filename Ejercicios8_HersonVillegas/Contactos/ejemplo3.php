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

$obj = json_decode($json);
$obj2 = json_decode($json2);
$obj3 = json_decode($json3);
$obj4 = json_decode($json4);
$obj5 = json_decode($json5);
$obj6 = json_decode($json6);

echo $obj->Ndecontacto;
echo '<br>';
echo $obj->nombre;
echo '<br>';
echo $obj->apellidos;
echo '<br>';
echo $obj->FdN;
echo '<br>';
echo $obj->estadocivil;
echo '<br>';
echo $obj->origen;
echo '<br>';
echo $obj->email;
echo '<br>';
echo $obj->redessociales;
echo '<br>';
echo '<br>';

echo $obj2->Ndecontacto;
echo '<br>';
echo $obj2->nombre;
echo '<br>';
echo $obj2->apellidos;
echo '<br>';
echo $obj2->FdN;
echo '<br>';
echo $obj2->estadocivil;
echo '<br>';
echo $obj2->origen;
echo '<br>';
echo $obj2->email;
echo '<br>';
echo $obj2->redessociales;
echo '<br>';
echo '<br>';

echo $obj3->Ndecontacto;
echo '<br>';
echo $obj3->nombre;
echo '<br>';
echo $obj3->apellidos;
echo '<br>';
echo $obj3->FdN;
echo '<br>';
echo $obj3->estadocivil;
echo '<br>';
echo $obj3->origen;
echo '<br>';
echo $obj3->email;
echo '<br>';
echo $obj3->redessociales;
echo '<br>';
echo '<br>';

echo $obj4->Ndecontacto;
echo '<br>';
echo $obj4->nombre;
echo '<br>';
echo $obj4->apellidos;
echo '<br>';
echo $obj4->FdN;
echo '<br>';
echo $obj4->estadocivil;
echo '<br>';
echo $obj4->origen;
echo '<br>';
echo $obj4->email;
echo '<br>';
echo $obj4->redessociales;
echo '<br>';
echo '<br>';

echo $obj5->Ndecontacto;
echo '<br>';
echo $obj5->nombre;
echo '<br>';
echo $obj5->apellidos;
echo '<br>';
echo $obj5->FdN;
echo '<br>';
echo $obj5->estadocivil;
echo '<br>';
echo $obj5->origen;
echo '<br>';
echo $obj5->email;
echo '<br>';
echo $obj5->redessociales;
echo '<br>';
echo '<br>';

echo $obj6->Ndecontacto;
echo '<br>';
echo $obj6->nombre;
echo '<br>';
echo $obj6->apellidos;
echo '<br>';
echo $obj6->FdN;
echo '<br>';
echo $obj6->estadocivil;
echo '<br>';
echo $obj6->origen;
echo '<br>';
echo $obj6->email;
echo '<br>';
echo $obj6->redessociales;
echo '<br>';
echo '<br>';
?>