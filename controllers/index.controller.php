<?php

$search = $_REQUEST['search'] ?? null;

view('index', [
  'books' => $database->query(
    query: "SELECT * FROM books WHERE title LIKE :filter",
    class: Book::class,
    params: ['filter' => "%$search%"]
  )->fetchAll(),
  'search' => $search,
]);