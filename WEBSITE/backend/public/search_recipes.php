<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');
    
    require '../backend/database.php';
    $search = $_GET['search'] ?? '';
    $recipes = getSearchedRecipes($search);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Recepten zoeken</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Recepten zoeken</h1>

<p>
Dit script moet je aanroepen met de querystring: <strong>search_recipes.php?search=...</strong> met op de puntjes een zoektekst. Er wordt gezocht in de databasevelden recipe.name, recipe.description en ingredient.name. 
</p>

<p>
De functie <em>getSearchedRecipes($search)</em> retourneert een gewone array (geïndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een recept), geïndexeerd met de veldnamen van de databasetabel <em>recipes</em>.<br />
Als er geen recepten gevonden worden, dan retourneert de functie <em>getSearchedRecipes($search)</em> een lege array. Ook als er gezocht wordt met een lege string (dus feitelijk niet gezocht) dan retourneert de functie een lege array.
</p>

<h2>Var-dump van het resultaat van <em>getSearchedRecipes('<?= $search ?>')</em></h2>

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