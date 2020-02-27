<?php
    include ('./options/database.php');
?>

<div>
        <a type="button" class="btn btn-secondary" href="updatePerso.php">Modifier</a>
        <a type="button" class="btn btn-secondary" href="deletePerso.php">Supprimer</a>
</div>

<img src="./assets/css/images/Bonnet.jpeg" alt="" class="profile-image">

<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=base-de-donnees-clem;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT prenom, nom, age FROM personnel');

while ($personnel = $reponse->fetch())
{
    echo '<br />';
    echo $personnel["prenom"] . '<br />';
    echo $personnel["nom"] . '<br />';
    echo $personnel["age"] . '<br />';
}

$reponse -> closeCursor();

?>