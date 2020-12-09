<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');

    require '../backend/database.php';
    $id_recipe = $_GET['id'] ?? 0;
    $recipe = getRecipe($id_recipe);
    $ingredients = getIngredients($id_recipe);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Eén recept</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Eén recept, met bijbehorende ingrediënten</h1>

<p>
Dit script moet je aanroepen met de querystring: <strong>recipe.php?id=...</strong> met op de puntjes een bestaande id-waarde uit de databasetabel <em>recipes</em>.
</p>

<p>
De functie <em>getRecipe($id_recipe)</em> retourneert een associatieve array, geïndexeerd met de veldnamen van de databasetabel <em>recipes</em>.<br />
Als de meegegeven id niet bestaat in de databasetabel <em>recipes</em>, dan retourneert de functie <em>getRecipe($id_recipe)</em> de boolean waarde <strong>false</strong>.<br />
<br />
De functie <em>getIngredients($id_recipe)</em> retourneert een gewone array (geïndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een ingrediënt), geïndexeerd met (aliassen van) de veldnamen van de databasetabellen <em>amounts, ingredients en units</em>.<br />
Als de meegegeven id niet bestaat (als id_recipe) in de databasetabel <em>amounts</em>, dan retourneert de functie <em>getIngredients($id)</em> een lege array.
</p>
</p>

<h2>Var-dump van het resultaat van <em>getRecipe(<?= $id_recipe ?>)</em></h2>

<pre>
<?php var_dump($recipe); ?>
</pre>

<h2>Var-dump van het resultaat van <em>getIngredients(<?= $id_recipe ?>)</em></h2>

<p>In totaal <?= count($ingredients) ?> ingrediënt(en).</p>

<hr />

<?php
    foreach($ingredients as $ingredient)
    {
        echo '<pre>';
        var_dump($ingredient);
        echo '</pre>';
        echo '<hr/>';
    } 
?>

</body>
</html>