<?php
    include ('./options/database.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <h1>Update</h1>
    <form action="../../index.php?page=formations" method="post">
        <label for="annee">Année</label><br />
        <textarea name="annee"><?= $scolarites['annee'] ?></textarea><br />
        <br />
        <label for="diplome">Diplome</label><br />
        <textarea name="diplome"><?= $scolarites['diplome'] ?></textarea><br />
        <br />
        <label for="etablissement">Etablissement</label><br />
        <textarea name="etablissement"><?= $scolarites['etablissement'] ?></textarea><br />
        <br />
        <label for="ville">Ville</label><br />
        <textarea name="ville"><?= $scolarites['ville'] ?></textarea><br />
        <br />
        <label for="mention">Mention</label><br />
        <textarea name="mention"><?= $scolarites['mention'] ?></textarea><br />
        <br />
        <div class="form-actions">
            <input type="submit" value="Sauvegarder" class="btn btn-success">
        </div>
    </form>
    <a href="../../index.php?page=formations">Retour à la liste</a>

</body>

</html>