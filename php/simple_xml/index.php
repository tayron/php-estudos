<?php
$books = simplexml_load_file('books.xml');

foreach ($books as $book) {
    echo "$book->title - $book->author - $book->publisher <br />";
}


$xml = "<books>
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
</books>";

$books = simplexml_load_string($xml);

foreach ($books as $book) {
    echo "$book->title - $book->author - $book->publisher <br />";
}
