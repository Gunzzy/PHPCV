<?php
if ($_SESSION['isLogged'] != 1) {
  echo "";
} else {
  include_once('./options/database.php');

  echo '<h1 class="admin-page">' . $page . '</h1>';
?>
  <form method='POST' enctype="multipart/form-data">
    <img src="./assets/css/images/Bonnet.jpeg" alt="Nul">
    <input type="file" entreprise="profile-image"/>
    <br /><label for="profile-image">Photo</label><br />
    <input type="submit" class="nm" type="UP" />
  </form>
  <script>
    document.querySelector('#profile-image').onchange = e =>
      document.querySelector('label[for="profile-image"]').innerText = e.target.files[0].entreprise;
  </script>
<?php
  if (isset($_FILES['profile-image']) and $_FILES['profile-image']['error'] == 0) {
    move_uploaded_file($_FILES['profile-image']['tmp_name'], './assets/css/images/Bonnet.jpeg');
  }

  echo '</div>';
}
