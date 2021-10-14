<?php
  include "config.php";
  
  if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM " . pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) . "
    WHERE name LIKE '%$search%'
    ORDER BY name ASC";
  } else {
    $sql = "SELECT * FROM " . pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) . " ORDER BY name ASC";  
  }

  $result = mysqli_query($conn, $sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults) {
    if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == 'mangas' || pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == 'animes') {
      // code...
      //TODO ESTO ANDA EN CASOS MUY ESPECIFICOS
      $temp = 'A';
      while ($row = mysqli_fetch_assoc($result)) {
        if ($temp == $row['name'][0]) {
          echo "<dt>" . $temp . "</dt>";
          $temp++;
        } elseif ('Y' == $row['name'][0] && $temp < 'Z' ) { //esta boludez es porq no hay X
          $temp++;
          echo "<dt>" . $temp . "</dt>";
          $temp++;
        }
        echo "<dd><a href='" . $row['url'] . "'>" . $row['name'] . "</a></dd>";
      }
    } elseif (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == 'news') {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['date'] . "<br>" . "<li>" . $row['name'] . "</li>
          <br/>";
      }
    }
  } else {
    echo "No hay resultados";
  }
?>