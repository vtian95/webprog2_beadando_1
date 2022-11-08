<?php

$UPLOAD_DIR = 'uploads';

$DB_CONFIG = [
  'host' => "localhost",
  'port' => 3306,
  'username' => "root",
  'password' => "",
  'database' => "pizzapapa",
];

$PAGES = [
  'fooldal' => [
    'template' => 'fooldal.php',
    'name' => 'Főoldal',
  ],
  'hirek' => [
    'template' => 'hirek.php',
    'name' => 'Hírek',
  ],
  'pizzaink' => [
    'template' => 'pizzaink.php',
    'name' => 'Pizzáink',
  ],
  'belepes' => [
    'template' => 'belepes.php',
    'name' => 'Belépés',
  ],
  'mnb' => [
    'template' => 'mnb.php',
    'name' => 'MNB napi árfolyam',
  ],
  'kilepes' => [
    'template' => 'kilepes.php',
    'name' => 'Kilépés',
  ],
];