# REST

REST (REpresentational State Transfer) é um estilo de arquitetura para sistemas de 
hipermídia distribuídos, como a World Wide Web. O conceito dos recursos identificados 
por identificadores de recursos universais (URIs) é central para a arquitetura RESTful.

Esses recursos podem ser manipulados usando uma interface padrão, como HTTP, as 
informações são trocadas usando representações desses recursos.

Os Web services RESTful são serviços construídos com o estilo de arquitetura REST. 

A construção de Web services com a abordagem RESTful está surgindo como uma alternativa 
popular ao uso de tecnologias baseadas em SOAP (e outros...) para implantação de serviços na Internet, 
por ser mais leve e ter a capacidade de transmitir dados diretamente via HTTP.

**Rest é baseado nos verbos HTTP como por exemplo:**

* **GET:** Retorna um recurso existente
* **POST:** Cria um novo recurso
* **PUT:** Cria ou substitiu(FULL UPDATE) um recurso
* **PATCH:** Atualiza parte do recurso
* **DELETE:** Delete um recurso

Com isso quando ao mapear serviços rests eles deverão ficar semelhante aos exemplos abaixo:

1. http://api.dominio.com.br/cliente
2. http://api.dominio.com.br/cliente/2
3. http://api.dominio.com.br/cliente/2/endereco
4. http://api.dominio.com.br/cliente/1/contato
5. http://api.dominio.com.br/cliente/1/contato/59
6. http://api.dominio.com.br/cliente/1/compra/22/item/5

<br />

Ao fazer uma requisição via GET para o item 1, o serviço deverá retornar o registro de ID 1 existente numa base de dados,
mas se fizermos uma requisição via POST para o item passando os dados do cliente,
o serviço deverá criar um novo registro no banco de dados.

<br />

Observe que também é possível criar mapas de relacionamento igual mostrado no item 3 e 4. 
No item 3 o serviço deverá retornar os dados de contato do cliente de ID 1 enquando o item 4
deverá retornar o item 4 adiquiro pelo cliente 1 através da compra de ID 22.

O cliente ao consumir o webservice deverá tratar o retorno da requisição através dos códigos de respostas do HTTP, exemplo:

<br />

1. O código abaixo indica que a requisição foi bem sucedida. 
```php
200 OK
```

2. O código abaixo indica que a requisição e a criação de um recurso foi bem sucedidas. 
```php
201 criação OK
```

2. O código abaixo é utilizado para confirmar se as requisições PUT ou POST foram bem sucedidas.
```php
400 solicitação inválida
```

3. O código abaixo é usado para informar que a requisição não foi feita corretamente. Isso acontece especialmente com requisições POST e PUT, quando as informações não são validadas ou estão no formato errado.
```php
404 página não encontrada
```

4. O código abaixo indica que o recurso requisitado não pode ser encontrado ou não autorizado. 
Essa reposta é geralmente utilizada para as requisições que apontam para uma URL inexistente ou uma que o cliente não tem permissão de acesso.
```php
401 não autorizado
```

5. O código abaixo indica que você precisa primeiro estar autenticado para acessar o recurso.
```php
405 método não permitido
```

6. O código abaixo indica que o método HTTP utilizado não é suportado por este recurso.
```php
409 conflito
```

7. O código abaixo indica um conflito na requisição. Por exemplo, você está utilizando uma 
requisição PUT para criar o mesmo recurso duas vezes.
```php
500 erro interno do servidor
```

Quando todos os outros falham; geralmente, o código de reposta **500** é apresentado 
quando o processamento falha devido a circunstâncias do servidor, o que causa erro no servidor.

<br />

Referências: 

* https://netbeans.org/kb/docs/websvc/rest_pt_BR.html
* http://code.tutsplus.com/pt/tutorials/a-beginners-guide-to-http-and-rest--net-16340
