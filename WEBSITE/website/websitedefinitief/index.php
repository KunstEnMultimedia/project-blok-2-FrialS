<?php
    session_start();
    $message = $_SESSION["boodschap"] ?? "ingrediënt, recept, keyword";
    unset($_SESSION["boodschap"]);
    require 'database/database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="sass/main.css">
</head>

<body background="iconen/achtergrond.png"></body>
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
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
  <h1>Oerhollandse Recepten</h1>
  <!-- <div class="form-group">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <span><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
             </div>
        </div> -->
  <form method="GET" action="allerecepten.php">
      <div>
      <div class="zoekbalk">
      <input type="text" placeholder="<?= $message ?>" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="zoekbalk-versiering">
      <img src="iconen/versierselzoekbalk.svg">
    </div>
    </div>
  </form>
  <div class="container-fluid">
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
  <h1 class="oerhollands-light">Oerhollandse gerechten</h1>
  <div class="container">
    <div class="row">
      <div class="card" style="width: 18rem;">
        <img src="iconen/9.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Garnalen cocktail</h5>
          <p class="card-text">1. Meng de cre?me frai?che met de mayonaise, ketchup en whisky tot cocktailsaus. Breng op
            smaak met het citroensap, de tabasco, peper en eventueel zou..</p>
          <a href="receptpagina.php?id=9" class="btn btn-link">Lees meer</a>
        </div>
      </div>
      <div class="col-sm"></div>
      <div class="card" style="width: 18rem;">
        <img src="iconen/7.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hete bliksem</h5>
          <p class="card-text">1. Schil de aardappelen, snijd ze in gelijke stukken en snipper de uien grof. Schil de
            goudrenetten, verwijder het klokhuis en snijd het vruchtvlees i..</p>
          <a href="receptpagina.php?id=7" class="btn btn-link">Lees meer</a>
        </div>
      </div>
      <div class="col-sm"></div>
      <div class="card" style="width: 18rem;">
        <img src="iconen/4.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Blote billetes in het gras</h5>
          <p class="card-text">1. Snijd de snijbonen in schuine, dunne plakjes. Breng een pan water met zout aan de kook
            en kook ze in 6 min. beetgaar. Giet af. 2. Doe de cannell..</p>
          <a href="receptpagina.php?id=4" class="btn btn-link">Lees meer</a>
        </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-2 mx-auto">
    <a class="button-allrecipes btn-primary" href="allerecepten.php" role="button">Alle recepten</a> </div>
</main>
<footer>
  <p>Made by Frial</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>