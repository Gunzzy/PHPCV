<?php  

function getPage()
{
  include ('./pages/pages/perso.php');
  include ('./pages/pages/loisirs.php');
  include ('./pages/pages/formations.php');
  include ('./pages/pages/exp.php');
}

function Tableau($response)
{
  while ($data = $response->fetchObject()) {
    echo "<ul>";
    foreach ($data as $v) {
      if (isset($v)) {
        echo "<li>$v</li>";
      }
    }
    echo "</ul>";
  }
}

function TabTab($response)
{
  $switch = true;
  echo "<ul>";
  while ($arr = $response->fetchObject()) {
    foreach ($arr as $v) {
      if ($switch) {
        echo "<li>$v: ";
      } else {
        echo "$v</li>";
      }
      $switch = !$switch;
    }
  }
  echo "</ul>";
}

function TabPara($response, $params)
{
  $count = 0;
  $switch = true;
  echo "<ul>";
  while ($arr = $response->fetchObject()) {
    foreach ($arr as $v) {
      if ($switch) {
        echo "<li>$v: <a href=\"" . (isset($params[$count])) ? $params[$count] : "#";
      } else {
        echo "$v\">$v</a></li>";
      }
      $switch = !$switch;
    }
    $count++;
  }
  echo "</ul>";
}

?>