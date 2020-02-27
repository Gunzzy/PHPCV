<?php
if ($_SESSION['isLogged'] != 1) {
  echo "<h1></h1>";
} else {
  include_once('./options/database.php');
  //getDelete($database, 'school', 'school_id');
  //getAdd($database, 'school');
  echo '<h1 class="admin-page">' . $page . '</h1>';
  echo '</div>';
}

?>

<div>
        <a type="button" class="btn btn-secondary" href="./options/create.php"><br />Ajouter</a>
</div>

<h3>Essaye avec un autre type de formulaire Add (Create), mais pas d'enregistrement dans la base de donnée</h3>
