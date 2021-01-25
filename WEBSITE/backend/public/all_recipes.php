<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');
    
    require '../backend/database.php';
    $recipes = getAllRecipes();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Alle recepten</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Alle recepten</h1>

<p>
De functie <em>getAllRecipes()</em> retourneert een gewone array (geïndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een recept), geïndexeerd met de veldnamen van de databasetabel <em>recipes</em>.<br />
Als er geen recepten in de database zitten, dan retourneert de functie <em>getAllRecipes()</em> een lege array.
</p>

<h2>Var-dump van het resultaat van <em>getAllRecipes()</em></h2>

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