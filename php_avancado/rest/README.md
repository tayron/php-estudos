# REST

REST (REpresentational State Transfer) é um estilo de arquitetura para sistemas de 
hipermídia distribuídos, como a World Wide Web. O conceito dos recursos identificados 
por identificadores de recursos universais (URIs) é central para a arquitetura RESTful.

Esses recursos podem ser manipulados usando uma interface padrão, como HTTP, e as 
informações são trocadas usando representações desses recursos.

Os Web services RESTful são serviços construídos com o estilo de arquitetura RESTful. 

A construção de Web services com a abordagem RESTful está surgindo como uma alternativa 
popular ao uso de tecnologias baseadas em SOAP para implantação de serviços na Internet, 
por ser mais leve e ter a capacidade de transmitir dados diretamente via HTTP.

#Aqui estão alguns códigos de resposta HTTP, que geralmente são utilizado com REST:
<br />
```php
200 OK
```

Essa resposta indica que a requisição foi bem sucedida. 
```php
201 criação OK
```

Este indica que a requisição e a criação de um recurso foi bem sucedidas. 
É utilizado para confirmar se as requisições PUT ou POST foram bem sucedidas.
```php
400 solicitação inválida
```

A requisição não foi feita corretamente. Isso acontece especialmente com requisições 
POST e PUT, quando as informações não são validadas, ou estão no formato errado.
```php
404 página não encontrada
```

Essa resposta indica que o recurso requisitado não pode ser encontrado. 
Essa reposta é geralmente utilizada para as requisições que apontam para uma URL inexistente.
```php
401 não autorizado
```

Esse erro indica que você precisa primeiro estar autenticado para acessar o recurso.
```php
405 método não permitido
```

O método HTTP utilizado não é suportado por este recurso.
```php
409 conflito
```

Este indica um conflito na requisição. Por exemplo, você está utilizando uma 
requisição PUT para criar o mesmo recurso duas vezes.
```php
500 erro interno do servidor
```

Quando todos os outros falham; geralmente, o código de reposta 500 é apresentado 
quando o processamento falha devido a circunstâncias do servidor, o que causa erro no servidor.

<br />

Referências: 

* https://netbeans.org/kb/docs/websvc/rest_pt_BR.html
* http://code.tutsplus.com/pt/tutorials/a-beginners-guide-to-http-and-rest--net-16340