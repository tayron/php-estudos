<?php
ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache

$server = new SoapServer(null, ['uri' => 'http://localhost/php/soap/']);

function hello($nome)
{
    return 'Hello ' . $nome;
}

$server->addFunction('hello');
$server->handle();
