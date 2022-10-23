<?php

$UPLOAD_DIR = 'uploads';

$DB_CONFIG = [
  'host' => "mysql.omega",
  'port' => 3306,
  'username' => "pizzapapa1",
  'password' => "Pizzapapa492600",
  'database' => "pizzapapa1",
];

$PAGES = [
  'fooldal' => [
    'template' => 'fooldal.php',
    'name' => 'Főoldal',
  ],
  'galeria' => [
    'template' => 'galeria.php',
    'name' => 'Galéria',
  ],
  'uzenetek' => [
    'template' => 'uzenetek.php',
    'name' => 'Üzenetek',
  ],
  'kapcsolat' => [
    'template' => 'kapcsolat.php',
    'name' => 'Kapcsolat',
  ],
  'belepes' => [
    'template' => 'belepes.php',
    'name' => 'Belépés',
  ],
  'kilepes' => [
    'template' => 'kilepes.php',
    'name' => 'Kilépés',
  ],
];