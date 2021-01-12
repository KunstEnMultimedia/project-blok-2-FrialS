<?php
    require 'database/database.php';
    $id_recipe = $_GET['id'] ?? 0;
    $recipe = getRecipe($id_recipe);
    $ingredients = getIngredients($id_recipe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="/iconen/achtergrond.png"></body>
    <header>
        <!-- <h3 class="logo">
            <a href="#">Frial</a>
        </h3>
        <nav>
            <ul>
                <li>
                    <a href="Home">Home</a>
                </li>
                <li>
                    <a href="Recepten">Recepten</a>
                </li>
                <li>
                    <a class="nav-link" href="favorieten.html"><img src="/iconen/Union 1.svg" width="30" height="30" alt="" loading="lazy">Mijn favorieten</a>
                </li>
            </ul>
        </nav> -->
        <!-- 1. Voeg class toe en stijl daarin de background, height, etc. -->
        <nav class="navbar navbar-expand-lg">
            <!-- 2. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
            <a class="navbar-brand" href="#">Frial</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <!-- 3. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="allerecepten.php">Recepten</a>
                </li>
            </div>

            <div class="container">
                <!-- 4. Voeg class toe en stijl daarin de font-size, font-weight, color, etc. -->
                <a class="fav-link ml-auto" href="favorieten.php"><img src="iconen/favorieten.svg" width="30" height="30" alt="" loading="lazy">Mijn favorieten</a>
              </div>
          </nav>
    </header>
    <main> 
          <div class="row align-items-end">
            <div class="col">
            <img src="iconen/blotebilletjes.png" style="max-height: 384px;max-width:398px;">
              Voorgerecht
            </div>
            <div class="col">
            <img src="iconen/hachee.png">
              Hoofdgerecht
            </div>
            <div class="col">
                <img src="iconen/stroopwafels.png">
              Nagerecht
            </div>
          </div>
        </div>
        <div class="ingredients">
          <p>ingredients</p>
        </div>
        <div class="gerecht-foto">
          <img src="fotos-recipes/blotebilletjes.jpg" alt="">
        </div>
        <div class="text-box">
            <h1><?= $recipe['name'] ?></h1>
            <p>
                <img class="img-fav" src="iconen/favorietensymbool.svg" width="30" height="30" alt="" loading="lazy"><?= $recipe['description']?></p>
                <!-- <img src="iconen/favorieten.svg" width="30" height="30" alt="" loading="lazy"></p> -->
        </div>
        
    </main>
    <footer>
        <p>Made by Frial</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

<div class="gerecht-img">
  <img src="fotos-recipes/<?= $recipe['id'] ?>.jpg" alt="">
</div>