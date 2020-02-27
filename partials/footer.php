<?php 

    include('./options/visiteur.php') 
    
?>

<footer>
  <div class="login">
    <?php

        if (!isset($_SESSION['isLogged']) || ($_SESSION['isLogged'] == 0)) {
    
    ?>
      <form action="./?page=admin" method="POST">
        <input type="password" id="password" entreprise="password" placeholder="Password">
        <button>Connexion</button>
      </form>
    <?php

        }

    ?>

  </div>

<?php

getAndIncrementCompteur()

?>

</footer>