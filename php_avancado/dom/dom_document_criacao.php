<?php

$dom = new DOMDocument('1.0', 'ISO-8859-1');
 
$element = $dom->createElement('nome', 'Tayron');
$dom->appendChild($element);
 
$dom->save('criado_com_dom_document.xml');