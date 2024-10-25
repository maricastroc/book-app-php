<?php
  flash()->exit('auth');

  header('location: /login');

  exit();
?>