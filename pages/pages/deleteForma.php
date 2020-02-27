<?php
    include ('./options/database.php');

$id = 0;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    $id = $_POST['id'];

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=base-de-donnees-clem;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd -> prepare("DELETE FROM scolarites WHERE id = :id ");
    $req -> execute(['annee' => $annee, 'diplome' => $diplome, 'etablissement' => $etablissement, 'ville' => $ville, 'mention' => $mention]);
    $q -> closeCursor();
    header("Location: ../../index.php?page=formations");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Delete</h3>
            </div>

            <form class="form-horizontal" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <p class="alert alert-error">Tu es sûr de vouloir supprimer ça ?</p>
                <div class="form-actions">
                    <input type="submit" value="Yes" class="btn btn-success">
                    <a href="../../index.php?page=formations">Non</a>
                </div>
            </form>
        </div>

    </div> <!-- /container -->
</body>

</html>