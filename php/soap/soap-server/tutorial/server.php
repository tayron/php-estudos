<?php
require 'inventory_functions.php';

ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache
$server = new SoapServer('inventory.wsdl');
$server->addFunction('getItemCount');
$server->handle();