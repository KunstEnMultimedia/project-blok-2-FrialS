<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');
    
    require '../backend/database.php';

    $id_ingredient = $_GET['id'] ?? 0;

    $ingredient = getIngredient($id_ingredient);
    $recipes = getRecipesByIngredient($id_ingredient);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Recepten per ingrediënt</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Recepten per ingrediënt</h1>

<p>
Dit script moet je aanroepen met de querystring: <strong>recipes_by_ingredient.php?id=...</strong> met op de puntjes een bestaande id-waarde uit de databasetabel <em>ingredients</em>. 
</p>

<p>
De functie <em>getIngredient($id_ingredient)</em> retourneert een associatieve array, geïndexeerd met de veldnamen van de databasetabel <em>ingredients</em>.<br />
Als de meegegeven id niet bestaat in de databasetabel <em>ingredients</em>, dan retourneert de functie <em>getIngredient($id_ingredient)</em> de boolean waarde <strong>false</strong>.<br />
<br />
De functie <em>getRecipesByIngredient($id_ingredient)</em> retourneert een gewone array (geïndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een recept), geïndexeerd met de veldnamen van de databasetabel <em>recipes</em>.<br />
Als er geen recepten gevonden worden, dan retourneert de functie <em>getRecipesByIngredient($id_ingredient)</em> een lege array.
</p>

<h2>Var-dump van het resultaat van <em>getIngredient(<?= $id_ingredient ?>)</em></h2>

<pre>
<?php var_dump($ingredient); ?>
</pre>

<h2>Var-dump van het resultaat van <em>getRecipesByIngredient(<?= $id_ingredient ?>)</em></h2>

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