<?php

$array=array("contactos"=>array(
	array(
		"N.# de contacto"=>"1", 
		"nombre"=>"Herson", 
		"apellidos"=>"Villegas", 
		"FdN"=>"1997-08-17", 
		"estado civil"=>"Viudo", 
		"origen"=>"Gomez Palacio", 
		"email"=>"Herson@outlook.com", 
	    "redes sociales"=>"Facebook"
	),

    array(
		"N.# de contacto"=>"2", 
		"nombre"=>"Cristian", 
		"apellidos"=>"Acosta", 
		"FdN"=>"1997-08-07", 
		"estado civil"=>"Union Libre", 
		"origen"=>"Matamoros", 
		"email"=>"cristian@gmail.com", 
	    "redes sociales"=>"Instagram"
	),

    array(
		"N.# de contacto"=>"3", 
		"nombre"=>"Pancho", 
		"apellidos"=>"Pantera", 
		"FdN"=>"1989-02-01", 
		"estado civil"=>"Divorciado", 
		"origen"=>"Tlahualilo", 
		"email"=>"panchito@gmail.com", 
	    "redes sociales"=>"Facebook"
	),

    array(
		"N.# de contacto"=>"4", 
		"nombre"=>"Samuel", 
		"apellidos"=>"Garcia", 
		"FdN"=>"1999-03-05", 
		"estado civil"=>"Divorciado", 
		"origen"=>"Gomez Palacio", 
		"email"=>"shmuel@gmail.com", 
	    "redes sociales"=>"Facebook, Instagram"
	),

    array(
		"N.# de contacto"=>"5", 
		"nombre"=>"David", 
		"apellidos"=>"Ibarra", 
		"FdN"=>"2000-10-08", 
		"estado civil"=>"Union Libre", 
		"origen"=>"Gomez Palacio", 
		"email"=>"tiri@outlook.com", 
	    "redes sociales"=>"Facebook, Instagram"
	),

    array(
		"N.# de contacto"=>"6", 
		"nombre"=>"Jose", 
		"apellidos"=>"Gomez", 
		"FdN"=>"0001-10-10", 
		"estado civil"=>"Casado", 
		"origen"=>"Lerdo", 
		"email"=>"jose@gmail.com", 
	    "redes sociales"=>"Facebook, Instagram"
	)
	
)

);
echo json_encode($array);
?>