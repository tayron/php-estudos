<?php
$books = simplexml_load_file('books.xml');

foreach ($books as $book) {
    echo "$book->title - $book->author - $book->publisher <br />";
}