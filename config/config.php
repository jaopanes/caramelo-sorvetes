<?php

// Const
$url = 'http://localhost/MVCCaramelo/';

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ASSETS', $url . 'public/assets/');
define('DATABASE', [
  'host' => 'localhost',
  'dbname' => 'sorveteria',
  'user' => 'root',
  'password' => '',
  'options' => [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]
]);


// Timezone
date_default_timezone_set('America/Sao_Paulo');

function priceFormart($price)
{
  echo 'R$' . str_replace('.', ',', $price);
}