<?php

function getAndIncrementCompteur(){
  if (!file_exists("compteur.txt"))
  {
    file_put_contents("compteur.txt", "0");
  }
  $content = file_get_contents("compteur.txt");
  $content++;
  file_put_contents("compteur.txt", $content);

  echo "Nombre de visiteur sur le site : ";

  return $content;
  
}

?>