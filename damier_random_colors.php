<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="damier_random_colors.css" rel="stylesheet" type="text/css"> 
  <title>LE DAMIER</title>
</head>
  <body>
      
  <?php

      function randomColor() {
        return '#' . dechex(rand(0, 255)) . dechex(rand(0, 255)) . dechex(rand(0, 255));
}

    echo '<div class="damier">';
    
      $lines = 10;
      $columns = 10;
      for ($l = 0; $l < $lines; $l++) {
          echo '<div class="ligne">';
          for ($c = 0; $c < $columns; $c++) {
              // Génération d'une couleur aléatoire pour chaque case
              $color = randomColor();

              echo '<div class="case" style="background-color:' . $color . ';"></div>';
            }
            echo '</div>';
        }
        echo '</div>';
    ?>
  </body>
</html>