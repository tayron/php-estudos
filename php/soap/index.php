<?php
require_once('lib/nusoap.php');
require_once('Calculo.php');

// Configurando o webservice
$server = new soap_server();

$server->configureWSDL('RVApi', 'urn:RVApi');
$server->wsdl->schemaTargetNamespace = 'urn:RVApi';

// Registrando o serviço somar
$server->register(
    'Calculo.somar',
    array(
        'numeroA' => 'xsd:int',
        'numeroB' => 'xsd:int'
    ),
    array('return' => 'xsd:int'),
    'urn:RVApi',   //namespace
    'urn:RVApi#somar',  //soapaction
    'rpc', // style
    'encoded', // use
    'Realiza a soma entre 2 numeros',
    'utf-8'
);

$server->service(file_get_contents("php://input"));