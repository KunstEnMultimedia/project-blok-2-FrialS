<?php
    /** onderstaande regel is waarschijnlijk overbodig, heeft te maken met onjuiste weergave van bepaalde tekens bij mij (Jeroen) */
    header('Content-Type: text/html; charset=ISO-8859-1');
    
    require '../backend/database.php';
    $ingredients = getAllIngredients();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Alle ingredi�nten</title>
</head>

<body>

<?php require 'nav.include.html'; ?>

<h1>Alle ingredi�nten</h1>

<p>
De functie <em>getAllIngredients()</em> retourneert een gewone array (ge�ndexeerd vanaf 0).<br />
Elk item in de array is een associatieve array (een ingredi�nt), ge�ndexeerd met de veldnamen van de databasetabel <em>ingredients</em>.<br />
Als er geen ingredi�nten in de database zitten, dan retourneert de functie <em>getAllIngredients()</em> een lege array.<br />
<strong>Let op:</strong> de functie retourneert alleen ingredi�nten waar daadwerkelijk recepten aan zijn gekoppeld. 
</p>

<h2>Var-dump van het resultaat van <em>getAllIngredients()</em></h2>

<p>In totaal <?= count($ingredients) ?> ingredi�nt(en).</p>

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