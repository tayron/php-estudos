<?php
    ini_set('soap.wsdl_cache_enabled', '0');

    $client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    

    print_r($client->calcular(5, 20));