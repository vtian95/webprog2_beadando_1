<?php
	//error_reporting(0);
	require 'pizzak.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Pizzak', "http://localhost/szerver/szerver.php", "http://localhost/feladat/szerver/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("pizzak.wsdl" , $wsdlfile);
?>
