<?php

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