<?php    
    require 'database/database.php';
    
    /** dit cookie gaat met de response mee, en is hier alleen om te kunnen testen */
    setcookie('favorites', '1,2,3');
    
    /** dit cookie komt van de request */
    $favorites = $_COOKIE['favorites'] ?? '';
    
    $recipes = getFavoriteRecipes($favorites);
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
      <div class="container">
      <div class="row">
        <div class="card" style="width: 18rem;">
        <img src="iconen/9.svg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-link">Lees meer</a>
          </div>
        </div>
        <div class="col-sm"></div>
        <div class="card" style="width: 18rem;">
          <img src="iconen/9.svg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-link">Lees meer</a>
          </div>
        </div>
        <div class="col-sm"></div>
        <div class="card" style="width: 18rem;">
          <img src="iconen/9.svg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-link">Lees meer</a>
          </div>
        </div>
      </div>
      </div>
      </main>
    <footer>Made by Frial</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>