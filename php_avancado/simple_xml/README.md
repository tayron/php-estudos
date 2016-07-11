# SimpleXMLElement
Objeto retornado pelos métodos simplexml_load_string e simplexml_load_file com os dados do xml pronto para serem processados.
Ambas funções retornam um objeto da classe SimpleXMLElement com propriedades contendo os dados do documento XML, ou FALSE em caso de falha. Também podem retornar um E_WARNING caso seja encontrado erro no XML.

Método simplexml_load_string

Método que interpreta um script XML e o transforma em um objeto SimpleXMLElement.

# simplexml_load_file
Método que interpreta um arquivo XML e o transforma em um objeto SimpleXMLElement

Exemplo de utilização:

Arquivo books.xml
```php
  <books>
    <book>
        <author>Jack Herrington</author>
        <title>PHP Hacks</title>
        <publisher>O'Reilly</publisher>
    </book>
    <book>
        <author>Jack Herrington</author>
        <title>Podcasting Hacks</title>
        <publisher>O'Reilly</publisher>
    </book>
</books>
```

Lendo o arquivo e exibindo os dados na tela:
```php
$books = simplexml_load_file('books.xml');
foreach ($books as $book) {
    echo "$book->title - $book->author - $book->publisher <br />";
}
```



Utilize a função libxml_use_internal_errors() para suprimir todos os erros XML e a função libxml_get_errors() para iterar sobre eles posteriormente.

<br />

Referências: 
* http://php.net/manual/pt_BR/function.simplexml-load-string.php
* http://php.net/manual/pt_BR/function.simplexml-load-file.php



