<?php
    include ('./options/database.php');
?>

<div>
        <a type="button" class="btn btn-secondary" href="createForma.php">Ajouter</a>
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
    
$reponse = $bdd->query('SELECT etablissement, diplome, debut, fin FROM school');

while ($scolarites = $reponse->fetch())
{
    echo '<br />';
    echo $scolarites["etablissement"] . '<br />';
    echo $scolarites["diplome"] . '<br />';
    echo $scolarites["debut"] . '<br />';
    echo $scolarites["fin"] . '<br />';
    echo '<a type="button" class="btn btn-secondary" href="updateForma.php">Modifier</a><br />';
    echo '<a type="button" class="btn btn-secondary" href="deleteForma.php">Supprimer</a><br />';
}

$reponse -> closeCursor();

?>