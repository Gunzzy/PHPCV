<?php
if ($_SESSION['isLogged'] != 1) {
  echo "<h1></h1>";
} else {
  include_once('./options/database.php');
  //getDelete($database, 'loisirs', 'loisir_id');
  //getAdd($database, 'loisirs');
  echo '<h1 class="admin-page">' . $page . '</h1>';
  echo '</div>';
}
