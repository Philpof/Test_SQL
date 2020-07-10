<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dataBaseName = "gnouf";

  try {
    $db = new PDO("mysql:host=$servername;dbname=$dataBaseName", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed / Echec de la connexion : " . $e->getMessage();
  }
?>
