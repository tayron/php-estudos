#DOM - DOMDocument

Classe que representa uma estrutura HTM ou XML; 
Serve como a raiz da árvore de documento e pode ser usada para criar e iterar sobre estrururas XML e HTML.

# Exemplo de criação de um documento XML com DOM Document

```php
$dom = new DOMDocument('1.0', 'ISO-8859-1');
 
$element = $dom->createElement('nome', 'Tayron');
$dom->appendChild($element);
 
$dom->save('criado_com_dom_document.xml');
```

O código acima irá criar um arquivo chamado: criado_com_dom_document.xml com o seguinte conteúdo:

```php
<?xml version="1.0" encoding="ISO-8859-1"?>
<nome>Tayron</nome>
```

# Exemplo de leitura de um documento XML com Dom Document

Conteúdo do arquivo books.xml que será lido:
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

Lendo e exibindo informações do arquivo XML:
```php
$doc = new DOMDocument();
$doc->load('books.xml');

// Recuperando todos os livros
$books = $doc->getElementsByTagName('book');
foreach ($books as $book) {
    $authors = $book->getElementsByTagName('author');
    $author = $authors->item(0)->nodeValue;
    $publishers = $book->getElementsByTagName('publisher');
    $publisher = $publishers->item(0)->nodeValue;
    $titles = $book->getElementsByTagName('title');
    $title = $titles->item(0)->nodeValue;
    echo "$title - $author - $publisher <br />";
}

// Recuperando todos os autores
$authors = $doc->getElementsByTagName('author');

echo '<br />';

foreach($authors as $author){
    echo $author->nodeValue . '<br />';
}
```

<br />

Ref.: http://php.net/manual/pt_BR/class.domdocument.php
