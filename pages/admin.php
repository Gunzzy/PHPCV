<?php
if (isset($_POST['password'])) {
  if ($_POST['password'] == "Amsterdam") {
    $_SESSION['isLogged'] = 1;
  }
}

if ($_SESSION['isLogged'] == 1) {
?>
  <h1 class="admin-page"><u>Administration</u></h1>
  <div class="flex wrap">
    <div class="form-group">
      <a href="?page=admin/perso/perso" class="btn" style="color: black">Edit Perso</a><br />
      <a href="?page=admin/loisirs/loisirs" class="btn" style="color: orangered">Edit Loisirs</a><br />
      <a href="?page=admin/formations/formations" class="btn" style="color: green">Edit Etudes</a><br />
      <a href="?page=admin/expe/exp" class="btn">Edit Job</a><br /><br />
    </div>
  </div>
<?php
} else {}

?>