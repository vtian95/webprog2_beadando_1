<?php
	require("pizzak.php");
	$server = new SoapServer("pizzak.wsdl");
	$server->setClass('Pizzak');
	$server->handle();
?>
