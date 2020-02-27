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

    <h1>Création d'un Loisir</h1>
    <form action="../../index.php?page=loisirs" method="post">
        <label for="loisir">Loisirs</label><br />
        <input type="text" name="loisir"><br />
        <br />
        <br />
        <div class="form-actions">
            <input type="submit" value="Create" class="btn btn-success">
        </div>
    </form>
    <a href="../../index.php?page=loisirs">Retour à la liste</a>

</body>

</html>