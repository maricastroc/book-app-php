<?php
function view($view, $data = [])
{
  require 'views/template/app.php';
}

function dd(...$dump)
{
  dump($dump);

  exit();
}

function dump(...$dump)
{
  echo '<pre>';

  var_dump($dump);

  echo '</pre>';
}

function abort($code)
{
  view($code);

  die();
}

function flash()
{
  return new Flash;
}

function config($key = null) {
  $config = require 'config.php';

  if ($key !== null) {
    return $config[$key];
  }

  return $config;
}
