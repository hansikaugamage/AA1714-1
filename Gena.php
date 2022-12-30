<?php

require_once __DIR__ . "/vendor/autoload.php";

$class = "Bookcatalog\BookService";

$serviceURI = "http://localhost/AA1714-1/Server.php";

$wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);

$wsdlGenerator->generateWSDL(true);

$wsdlXML = $wsdlGenerator->dump();

$wsdlXML = $wsdlGenerator->save('AA1714.wsdl');
