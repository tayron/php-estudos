#Desenvolvimento, consumo e tratamento de retorno de Webservices REST, Restful e SOAP

Desenvolvimento de um webservice de dá através do mapeamento de serviços que o sistema 
deverá expor, podendo este serviço ser Restfull ou Soap. Como mensionado no Tópico sobre 
[REST](https://github.com/tayron/estudos/tree/master/php_avancado/rest) em PHP Avançado.
<br />
Deve-se ficar claro que REST é a arquitetura em que o webservice é implementado e Restfull 
é a demonicamção para o webservice criado em cima da arquitetura REST e que um webserice rest
pode retornar um XML ou Json enquando um Webservice SOAP retornará sempre um XML.

# Consumo de Webservice SOAP

O Consumo de um Webservice SOAP é feito através do objeto SoapClient, onde deverá ser 
informado em seu contrutor o endereço do webservice e logo em seguida invocar o serviço 
como se estivesse invocando um método de uma classe.

**Exemplo:**
```php
    $client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    
    $retorno = $client->calcular(5, 20);
```

Ao contrário da Arquitetura REST o SOAP não tem um padrão de resposta único, com isso
deve-se recorrer a documentação do webservice seja via WSDL ou consultando algum outro 
artefato para saber como são feitos os retornos para poder trata-los da melhor forma.

**Exemplo de um XML de retorno de um Webservice SOAP:**

```php
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <Temperatura xmlns="http://www.webserviceX.NET/">
      <celcius>15</temperature>
    </ConvertTemp>
  </soap:Body>
</soap:Envelope>
```

<br />

Recuperando a temperatura atual conforme o retorno acima:
```php
$client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    
$retorno = $client->getTemperaturaAtual();
$return = simplexml_load_string($retorno);
echo $return->Temperatura->celcius;
```php

O valor 15 deverá ser recuperado através da chamada $return->Temperatura->celcius;