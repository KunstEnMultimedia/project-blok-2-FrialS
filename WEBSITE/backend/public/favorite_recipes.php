<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');
    
    require '../backend/database.php';
    
    /** dit cookie gaat met de response mee, en is hier alleen om te kunnen testen */
    setcookie('favorites', '1,2,3');
    
    /** dit cookie komt van de request */
    $favorites = $_COOKIE['favorites'] ?? '';
    
    $recipes = getFavoriteRecipes($favorites);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Favoriete recepten</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Favoriete recepten</h1>

<p>
Dit script gebruikt een cookie met de naam <em>favorites</em>. Dat cookie bestaat nog niet als je deze testpagina in een nieuwe sessie voor het eerst bekijkt. Deze testpagina maakt het cookie (wat je in het project dus met javascript moet doen). Als je de pagina vernieuwt, bestaat het cookie wel, tot het einde van de sessie.<br />
De inhoud van het cookie is een kommagescheiden string van recept-id's (nummers). Spaties zijn toegestaan.
</p>

<p>
De functie <em>getFavoriteRecipes($favorites)</em> retourneert een gewone array (geïndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een recept), geïndexeerd met de veldnamen van de databasetabel <em>recipes</em>.<br />
Als er geen recepten gevonden worden, dan retourneert de functie <em>getFavoriteRecipes($favorites)</em> een lege array. Ook als er gezocht wordt met een leeg cookie (dus feitelijk geen favorieten) dan retourneert de functie een lege array.
</p>

<h2>Var-dump van het resultaat van <em>getFavoriteRecipes('<?= $favorites ?>')</em></h2>

<p>In totaal <?= count($recipes) ?> recept(en).</p>

<hr />

<?php
    foreach($recipes as $recipe)
    {
        echo '<pre>';
        var_dump($recipe);
        echo '</pre>';
        echo '<hr/>';
    } 
?>

</body>
</html>