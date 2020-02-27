<?php
    include ('./options/database.php');
?>

<div>
        <a type="button" class="btn btn-secondary" href="createLoisir.php">Ajouter</a>
</div>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=base-de-donnees-clem;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
    
$reponse = $bdd->query('SELECT loisir FROM loisirs');

while ($loisir = $reponse->fetch())
{
    echo '<br />';
    echo $loisirs["loisir"] . '<br />';
    echo '<a type="button" class="btn btn-secondary" href="updateLoisir.php">Modifier</a><br />';
    echo '<a type="button" class="btn btn-secondary" href="deleteLoisir.php">Supprimer</a><br />';
}

$reponse -> closeCursor();

?>