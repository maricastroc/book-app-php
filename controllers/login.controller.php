<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $password = $_POST['password'];

    $validations = [];

    $data = [
      'email' => $email,
      'password' => $password,
    ];

    $rules = [
      'email' => ['required'],
      'password' => ['min:8'],
    ];

    $validation = Validation::validate($rules, $data);

    $validations = $validation->validations;

    if (!empty($validations)) {
      flash()->push('validations', $validations);

      header('Location: /login');

      exit();
    }

    $query = $database->query("SELECT * FROM users WHERE email = :email", User::class, ['email' => $email]);

    $user = $query->fetch();

    if ($user) {
        if (!password_verify($password, $user->password)) {
          flash()->push('validations', [
            'Incorrect e-mail or password!'
          ]);

          header('location: /login');
          
          exit();
        }

        flash()->push('auth', $user->name);

        header('location: /');

        exit();
    } else {
        $message = 'Incorrect e-mail or password!';
    }
}

view('login');