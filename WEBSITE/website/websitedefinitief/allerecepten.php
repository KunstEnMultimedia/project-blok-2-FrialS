<?php   
    session_start();
    require 'database/database.php';
    $search = $_GET['search'] ?? '';
    if ($search == ""){
      $recipes = getAllRecipes();
    } else {
      $recipes = getSearchedRecipes($search);
      // als er geen recepten zijn, gaan we terug naar de index met de zoekbalk
      if (count($recipes) == 0){
        $_SESSION["boodschap"] = "Niets gevonden!";
        header("location:index.php");
        exit;
      }
    }
    

    const RECIPES_PER_ROW = 3;

    $rows = ceil(count($recipes) / RECIPES_PER_ROW);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorieten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="sass/main.css">
</head>
<body bgcolor="#CEDEF2"></body>
    <header>
    <nav class="navbar navbar-expand-lg">
    <!-- 2. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Frial</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <!-- 3. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allerecepten.php">Recepten</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center">
          <!-- 4. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
          <a class="fav-link ml-auto" href="favorieten.php"><img src="iconen/favorieten.svg" width="30" height="30"
              alt="" loading="lazy">Mijn favorieten</a>
        </div>
      </div>
    </div>
  </nav>
    </header>
    <main>
      <?php
        $rec = 0;

        for ($row = 0; $row < $rows; $row++):
      ?>
        <div class="container">
          <div class="row">
            <?php 
              for ($col = 0; $col < RECIPES_PER_ROW; $col++):
                if ($col != 0):
            ?>
                  <div class="col-sm"></div>
            <?php
                endif;
                if ($rec < count($recipes)):
                  $recipe = $recipes[$rec];
            ?>
              <div class="card" style="width: 18rem;">
                <img src="iconen/<?= $recipe['id'] ?>.svg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $recipe['name'] ?></h5>
                  <p class="card-text"><?= substr($recipe['description'], 0,150)  ?></p>
                  <a href="receptpagina.php?id=<?= $recipe['id'] ?>" class="btn btn-link">Lees meer</a>
                </div>
              </div>
            <?php
                endif;
                $rec++;
              endfor;
            ?>
          </div>
        </div>
      <?php
        endfor;
      ?>   
    </main>
    <footer>Made by Frial</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>