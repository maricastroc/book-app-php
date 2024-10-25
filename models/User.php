<?php

class User {
  public $id;
  public $name;
  public $email;
  public $password;

  public static function make($item) {
    $user = new self();

    $user->id = $item['id'];
    $user->name = $item['name'];
    $user->email = $item['email'];
    $user->password = $item['password'];

    return $user;
  }
}