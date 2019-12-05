<?php
	//parametors para la conexion a la base de datos
	$host = "localhost";
	$basededatos = "cereso";
	$usuariodb = "bdcereso";
	$clavedb = "12345";

	//tablas de la base de datos
	$delito = "delito";
	$delito_reos = "delito_reos";
	$policia = "policia";
	$reos = "reos";
	$trabajo = "trabajo";
	$zona = "zona";

	error_reporting(0);

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

	if ($conexion->connect_errno) {
		echo "LA CONEXION EXPERIMENTA FALLOS";
		exit();
	}

?>