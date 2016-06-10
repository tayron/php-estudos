<?php
    ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache
    $client = new SoapClient('http://localhost/php/soap/soap-server/tutorial/inventory.wsdl');
    $return = $client->getItemCount('12345');
    print_r($return);