#Desenvolvimento, consumo e tratamento de retorno de Webservices REST, Restful e SOAP

Desenvolvimento de um webservice de dá através do mapeamento de serviços que o sistema 
deverá expor, podendo este serviço ser RESTFULL ou Soap. Como mensionado no Tópico sobre 
[REST](https://github.com/tayron/estudos/tree/master/php_avancado/rest) em PHP Avançado.
<br />
Deve-se ficar claro que REST é a arquitetura em cima do HTTP e RESTFULL 
é quando todo conceito (boas práticas) é implementado no serviço.
Este tipo de arquitetura permite que o webservice retorne praticamente qualquer 
devido seu poder de retornar qualquer coisa em formato de string,
mas usualmente costuma-se retornar um XML ou Json enquando um Webservice SOAP retornará 
sempre um XML.

# Consumo de Webservice SOAP

O Consumo de um Webservice SOAP pode ser feito através da biblioteca 
[CURL](http://php.net/manual/pt_BR/book.curl.php) ou do objeto 
[SoapClient](http://php.net/manual/pt_BR/class.soapclient.php), onde deverá ser 
informado em seu contrutor o endereço do webservice e logo em seguida invocar o serviço 
como se estivesse invocando um método de uma classe.

**Exemplo com CURL**

```php
$requisicao = curl_init();
curl_setopt($requisicao, CURLOPT_URL, $this->url_base);
curl_setopt($requisicao, CURLOPT_RETURNTRANSFER, true);
curl_setopt($requisicao, CURLOPT_POST, true);
curl_setopt($requisicao, CURLOPT_POSTFIELDS, $requisicao);

$retorno = curl_exec($requisicao);
if ($retorno === false) {
    echo curl_error($requisicao);    
} else {    
    echo $retorno;
}
curl_close($requisicao);
```

<br />

**Exemplo com SoapClient:**
```php
$client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    
$retorno = $client->calcular(5, 20);
```

Ao contrário da Arquitetura REST o SOAP não tem um padrão de resposta único, com isso
deve-se recorrer a documentação do webservice seja via WSDL ou consultando algum outro 
artefato para saber como são feitos os retornos para poder trata-los da melhor forma.

<br />

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

**Recuperando a temperatura atual conforme o retorno acima:**

```php
$client = new SoapClient('http://localhost/php/soap/soap-server/inventario.wsdl');    
$retorno = $client->getTemperaturaAtual();
$return = simplexml_load_string($retorno);
echo $return->Temperatura->celcius;
```

O valor 15 deverá ser recuperado através da chamada $return->Temperatura->celcius;

<br />

# Consumo de Webservice RESTFULL

Diferente do Webservice SOAP onde o PHP disponibilza o objeto SoapClient para seu consumo,
para o webservice rest Utilizamos a biblioteca [CURL](http://php.net/manual/en/book.curl.php).

**Exemplo de utilização**

```php
$url  = 'http://server.com';
$data = ['key' => 'value'];
$ch   = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);

curl_close($ch);
```

A curl fornece um client HTTP completo e flexível. Verifique a documentação da 
curl para explorar todas as funções disponíveis e as opções para customizar as 
requisições: (http://php.net/manual/pt_BR/book.curl.php)[http://php.net/manual/pt_BR/book.curl.php]

Apesar da curl ser fácil de usar, existem bibliotecas feitas em PHP, como o Guzzle, 
que fornecem uma camada de abstração orientada a objetos em cima da curl, tornando 
o código muito mais legível e elegante:

```php
use Guzzle\Http\Client;

$client   = new Client('http://server.com/');
$request  = $client->post('users', $headers, $data);
$response = $request->send();
```

[Parar acesso à documentação do Guzzle clique aqui.](http://guzzlephp.org)

