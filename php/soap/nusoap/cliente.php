<?php

ini_set('soap.wsdl_cache_enabled', '0');

$client = new SoapClient('http://localhost/php/soap/nusoap/servidor.php?wsdl');

print_r($client->somar(5, 10));