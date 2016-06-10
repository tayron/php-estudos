<?php
ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache

$client = new SoapClient(
    null, 
    [
        'location' => 'http://localhost/php/soap/soap_server.php',
        'uri' => 'http://localhost/php/soap/',
        'trace' => true
    ]
);

$result = $client->hello('Pedro');

if(is_soap_fault($result)){
    echo '<pre>';
    trigger_error("SOAP Fault: codigo = $result->faultcode, string = $result->faultstring");
}else{
    echo 'Resultado encontrado: <br />';
    print_r($result);
}