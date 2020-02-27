<?php
    include ('./options/database.php');
?>

<div>
        <a type="button" class="btn btn-secondary" href="createJob.php">Ajouter</a>
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
    
$reponse = $bdd->query('SELECT entreprise, type FROM experiences');

while ($experiences = $reponse->fetch())
{
    echo '<br />';
    echo $experiences["entreprise"] . '<br />';
    echo $experiences["type"] . '<br />';
    echo '<a type="button" class="btn btn-secondary" href="exp/update.php">Modifier</a><br />';
    echo '<a type="button" class="btn btn-secondary" href="exp/delete.php">Supprimer</a><br />';
}

$reponse -> closeCursor();

?>