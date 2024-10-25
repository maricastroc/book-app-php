<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $validations = [];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $confirm_email = $_POST['confirm_email'];
  $password = $_POST['password'];

  $data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'confirm_email' => $_POST['confirm_email'],
    'password' => $_POST['password'],
  ];

  $rules = [
    'email' => ['required', 'confirmed', 'unique:users'],
    'confirm_email' => ['required'],
    'password' => ['min:8', 'max:30', 'strong'],
  ];

  $validation = Validation::validate($rules, $data);

  $validations = $validation->validations;

  if (!empty($validations)) {
    flash()->push('validations', $validations);
    
    header('Location: /register');

    exit();
  }

  $database->query(
    query: "insert into users (email, password, name) values (:email, :password, :name)",
    params: [
      'email' => $_POST['email'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'name' => $_POST['name'],
    ],
  );

  flash()->push('successfully_registered', 'Successfully Registered!');

  header('location: /login');
}

view('register');
