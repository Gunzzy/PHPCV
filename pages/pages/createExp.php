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

    <h1>Création d'un Job Pro</h1>
    <form action="../../index.php?page=exp" method="post">
        <label for="entreprise">Entreprise</label><br />
        <input type="text" name="entreprise"><br />
        <br />
        <label for="type">Type</label><br />
        <input type="text" name="type"><br />
        <br />
        <br />
        <div class="form-actions">
            <input type="submit" value="Create" class="btn btn-success">
        </div>
    </form>
    <a href="../../index.php?page=exp">Retour à la liste</a>

</body>

</html>