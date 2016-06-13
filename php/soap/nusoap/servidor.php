<?php
require_once('lib/nusoap.php');

function somar($a, $b)
{
    return $a + $b;
}

// Configurando o webservice
$server = new soap_server();

$server->configureWSDL('RVApi', 'urn:RVApi');
$server->wsdl->schemaTargetNamespace = 'urn:RVApi';

// Registrando o serviço somar
$server->register(
    'somar',
    array(
        'numeroA' => 'xsd:int',
        'numeroB' => 'xsd:int'
    ),
    array('return' => 'xsd:int'),
    'urn:RVApi',   //namespace
    'urn:RVApi#somar',  //soapaction
    'rpc', // style
    'encoded', // use
    'Realiza a soma entre 2 numeros'
);

$server->service(file_get_contents('php://input'));