<?php

function calcular($a, $b)
{	
    return $a + $b;
}

ini_set('soap.wsdl_cache_enabled', '0');

$server = new SoapServer('inventario.wsdl');

$server->addFunction('calcular');
$server->handle();