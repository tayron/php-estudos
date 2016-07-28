# Server-Sent Events

Server-Sent Events é um recurso onde uma página é capaz de receber atualizações de um servidor.

Isso também era possível antes, mas a página web teria que perguntar se há atualizações disponíveis 
com isso o servidor era bombardeado de requisições até que se tivesse uma resposta.

Com eventos enviados pelo servidor as atualizações vêm automaticamente.

**Exemplos:** 

* Atualizações do Facebook 
* Atualizações do Twitter
* Atualizações preços de ações
* Atualizações de feeds de notícias
* Atualizações de resultados esportivos
* etc

**Navegadores suportados**

```php

API     Chrome      IE      Firefox     Safari      Opera
SSE     6.0         NS      6.0         5.0         11.5

NS: Nenhum suporte
```


# Exemplo de utilização:


```php
var source = new EventSource("pegar_atualizacao_noticia.php");
source.onmessage = function(event) {
    document.getElementById("noticias").innerHTML += event.data + "<br>";
};
```

O exemplo acima criar um novo objeto EventSource recebendo a URL da página de 
envio das atualizações (neste exemplo **pega_atualizacao_noticia.php**).

Cada vez que uma atualização é recebida, o evento onmessage é disparado.
Quando um evento onmessage é disparado, é recebida as atualizações do servidor através 
da variavel **event**, com isso podemos pegar os dados (*event.data*) e adicionar 
dentro do elemento de ID **noticias** do HTML.

# Checando se o navegador tem suporte

Para verificar se o navegador tem suporte basta seguir o exemplo abaixo:

```php
if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("pegar_atualizacao_noticia.php");
    source.onmessage = function(event) {
        document.getElementById("noticias").innerHTML += event.data + "<br>";
    };
} else {
    alert('Seu navegador não possui suporte');
} 
```

<br />


#Do lado do servidor

Para o exemplo acima funcionar, é necessário um servidor que seja capaz de enviar 
atualizações de dados como PHP ou ASP.

Do lado do servidor a sintaxe é bem simples, basta definir no cabeçalho o "Content-Type" 
como "text/event-stream".

**Exemplo com PHP**

```php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
```

**Exemplo com ASP (VB)**

```php
Response.ContentType = "text/event-stream"
Response.Expires = -1
Response.Write("data: The server time is: " & now())
Response.Flush()
```

<br />

**Exeplicação do código acima:**

* Definir "Content-Type" com "text/event-stream"
* Especificar que a página não deve ser armazenada em cache
* Saída dos dados enviados sempre começando com **"data: "**
* Envie a os dados de volta para a web page

<br />

Referências:

* http://www.w3schools.com/html/html5_serversentevents.asp
