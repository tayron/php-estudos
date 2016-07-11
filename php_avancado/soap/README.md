# SOAP

A extensão SOAP pode ser usado para escrever servidores SOAP e clientes. Ele suporta os subconjuntos de SOAP 1.1, SOAP 1.2 e especificações de WSDL 1.1.


Para se trabalhar com SOAP no PHP deve-se ter o módulo "php_soap" habilitado no php.ini, geralmente basgta descomentar o seguinte trecho de código: extension=php_soap.dll  

#NuSOAP

Para criação de servidor SOAP é comum a utilização da biblioteca NuSOAP que é uma bilioteca em PHP para contrução de webservice baseado em SOAP. A grande vantagem de se utilizar esta biblioteca é a facilidade que ela traz na hora de construir o servidor e o fato dela construir dinamicamente o wsdl.

*Observação:* O exemplo abaixo requer a biblioteca Nusoap no diretório: /lib/*

servidor.php
```php
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
```

cliente.php
```php
ini_set('soap.wsdl_cache_enabled', '0');
$client = new SoapClient('http://localhost/php/soap/nusoap/servidor.php?wsdl');
print_r($client->somar(5, 10));
```

#SoapServer
Podemos também criar um webservice utilizando o Objeto SoapServer

servidor.php
```php
function calcular($a, $b)
{	
    return $a + $b;
}
ini_set('soap.wsdl_cache_enabled', '0');
$server = new SoapServer('inventario.wsdl');
$server->addFunction('calcular');
$server->handle();
```

inventario.xsdl

```php
<?xml version='1.0' encoding='UTF-8' ?>
<definitions name='Inventario'
             targetNamespace='urn:JimmyzInventario'
             xmlns:tns='urn:JimmyzInventario'
             xmlns:soap='http://schemas.xmlsoap.org/wsdl/soap/'
             xmlns:xsd='http://www.w3.org/2001/XMLSchema'
             xmlns:soapenc='http://schemas.xmlsoap.org/soap/encoding/'
             xmlns:wsdl='http://schemas.xmlsoap.org/wsdl/'
             xmlns='http://schemas.xmlsoap.org/wsdl/'>

    <message name='calcularRequest'>
        <part name='a' type='xsd:integer'/>
        <part name='b' type='xsd:integer'/>
    </message>
    <message name='calcularResponse'>
        <part name='resultado' type='xsd:integer'/>
    </message>

    <portType name='InventarioPortType'>
        <operation name='calcular'>
            <input message='tns:calcularRequest'/>
            <output message='tns:calcularResponse'/>
        </operation>
    </portType>

    <binding name='InventarioBinding' type='tns:InventarioPortType'>
        <soap:binding style='rpc'
                transport='http://schemas.xmlsoap.org/soap/http'/>
        <operation name='calcular'>
            <soap:operation soapAction='urn:xmethods-delayed-quotes#calcular'/>
            <input>
                <soap:body use='encoded' namespace='urn:xmethods-delayed-quotes'
                 encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/>
            </input>
            <output>
                <soap:body use='encoded' namespace='urn:xmethods-delayed-quotes'
                 encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/>
            </output>
        </operation>
    </binding>

    <service name='InventarioService'>
        <port name='InventarioPort' binding='InventarioBinding'>
            <soap:address location='http://localhost/php/soap/soap-server/servidor.php'/>
        </port>
    </service>
</definitions>
```

cliente.php
```php
    ini_set('soap.wsdl_cache_enabled', '0');
    $client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    
    print_r($client->calcular(5, 20));
```

<br />

*Observação:* A utilização do Objeto SoapServer requer a criação do arquivo WSDL manualmente enquanto a biblioteca NuSoap cria este arquivo dinamicamente.

<br />

Referência: 
* http://php.net/manual/pt_BR/intro.soap.php
