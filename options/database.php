<?php

function getDatabaseLog()
{
    try {
        $login = "root";
        $password = "";
        $pdo = new PDO('mysql:host=localhost;dbname=base-de-donnees-clem', $login, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAdd($database, $table)
{
  $data = $database->query("SELECT * FROM $table LIMIT 1")->fetchObject();
  $keys = [];
  foreach ($data as $k => $v) array_push($keys, $k);
  if (isset($_POST[$table]) && $_POST[$table] == 'Ajouter') {
    try {
      $sql = "INSERT INTO $table (";
      for ($i = 0; $i < count($keys); $i++) {
        $sql .= $keys[$i];
        if ($i + 1 != count($keys)) $sql .= ',';
        $sql .= " ";
      }
      $sql .= ') VALUES (';
      for ($i = 0; $i < count($keys); $i++) {
        $sql .= '"' . $_POST[$keys[$i]] . '"';
        if ($i + 1 != count($keys)) $sql .= ',';
        $sql .= " ";
      }
      $sql .= ');';
      $stmt = $database->prepare($sql);
      $stmt->execute();
      $stmt->rowCount() . " record(s) ADDED </div>";
    } catch (PDOException $e) {
      $e->getMessage() . '</div>';
    }
  }
};

function getDelete($database, $table, $where)
{
  
};

global $pagesTitles;
$pagesTitles = [
    'personnel' => 'Mon Cv',
    'exp' => 'Mes Exp',
    'formations' => 'Mes Formations',
    'loisirs' => 'Mes Loisirs',
];
