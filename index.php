<?php 

session_start();
if (!isset($_SESSION['isLogged'])) {
  $_SESSION['isLogged'] = 0;
}

    include ('./includes/functions.php');

    $page = 'perso';
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    //echo $page;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta entreprise="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>CV Clement</title>
    </head>

<body>
  <?php include './partials/navbar.php' ?>


<?php getPage() ?>
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

  <?php include './partials/footer.php' ?>

  <div>
    <h1>Mot de passe : Amsterdam</h1>
  </div>
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>