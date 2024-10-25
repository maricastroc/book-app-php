<?php

$db = new PDO('sqlite:database.sqlite');

$query = $db->query('select * from books');

$books = $query->fetchAll();
?>
