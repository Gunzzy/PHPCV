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

    <h1>Création d'une Formation</h1>
    <form action="../../index.php?page=formations" method="post">
        <label for="etablissement">Etablissement</label><br />
        <input type="text" name="etablissement"><br />
        <br />
        <label for="diplome">Diplome</label><br />
        <input type="text" name="diplome"><br />
        <br />
        <label for="debut">Debut</label><br />
        <input type="text" name="debut"><br />
        <br />
        <label for="fin">Fin</label><br />
        <input type="text" name="fin"><br />
        <br />
        <br />
        <div class="form-actions">
            <input type="submit" value="Create" class="btn btn-success">
        </div>
    </form>
    <a href="../../index.php?page=formations">Retour à la liste</a>

</body>

</html>