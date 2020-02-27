<?php
if ($_SESSION['isLogged'] != 1) {
  echo "<h1></h1>";
} else {
  include_once('./options/database.php');
  //getDelete($database, 'experiences', 'exp_id');
  //getAdd($database, 'experiences');
  echo '<h1 class="admin-page">' . $page . '</h1>';
  echo '</div>';
}
