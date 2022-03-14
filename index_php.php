<?php 

  include __DIR__. '/database.php';

?>

<!DOCTYPE html>
<html>

  <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Vue Dischi PHP</title>

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <header>
      <section id="header">

        <div class="header">

            <!-- LOGO -->
            <a href="#">
              <img src="./img/logo.png" alt="logo Spotify">
            </a>

        </div>
      </section>
    </header>

    <main>

      <section id="main">
        <div class="card-container">

          <?php
          
            foreach ($database as $singleCard) {

              echo "<div class='card'>";

                echo "<div class='img-wrap'>";
                  echo "<img src=' ". $singleCard['poster']. " '>";
                echo "</div>";

                echo "<div class='album-name'>";
                  echo "<h3>". $singleCard['title']. "</h3>";
                echo "</div>";

                echo "<div class='artist-year'>";
                  echo "<h4>". $singleCard['author']. "</h4>";
                  echo "<h5>". $singleCard['year']. "</h5>";
                echo "</div>";

              echo "</div>";  
            }
            
          ?>

        </div>
      </section>

    </main>
  </body>

</html>