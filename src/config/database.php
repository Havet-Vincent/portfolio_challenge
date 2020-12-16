<?php

// Include acces BDD
require(__DIR__.'/../includes/config.ini');
       
try {
  $db = new PDO(
      "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",
      DB_USER,
      DB_PASSWORD,
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
  );
} catch (\Exception $exception) {
  echo 'Erreur de connexion...<br>';
  echo $exception->getMessage().'<br>';
  echo '<pre>';
  echo $exception->getTraceAsString();
  echo '</pre>';
  exit;
}