<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <title>Test_SQL</title>

  </head>

  <body>

<?php
include "connexion.php";

try {
  $stmt = $db->query('SELECT titre, contenu FROM youpi');
  while ($row = $stmt->fetch()) {
    echo $row['titre'] . " - " . $row['contenu']. "<br>";

  }
} catch (\Exception $e) {
  echo $e->getMessage();
}

?>

  </body>
</html>
