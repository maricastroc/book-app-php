<?php

$id = $_REQUEST['id'];

view('book', [
  'book' => $database->query(
    query: "SELECT * FROM books WHERE id LIKE :id",
    class: Book::class,
    params: ['id' => "%$id%"]
  )->fetch(),
]);