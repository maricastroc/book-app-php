<?php

class Book {
  public $user_id;
  public $id;
  public $title;
  public $description;
  public $author;
  public $pages_number;
  public $publication_date;
  public $image_url;
  public $ratings;

  public static function make($item) {
    $book = new self();

    $book->user_id = $item['user_id'];
    $book->id = $item['id'];
    $book->title = $item['title'];
    $book->description = $item['description'];
    $book->author = $item['author'];
    $book->pages_number = $item['pages_number'];
    $book->publication_date = $item['publication_date'];
    $book->image_url = $item['image_url'];
    $book->ratings = $item['ratings'];

    return $book;
  }
}