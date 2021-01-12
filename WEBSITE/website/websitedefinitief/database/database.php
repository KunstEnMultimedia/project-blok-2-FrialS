<?php

/**
 * De database-configuratie: aanpassen indien nodig
 */

const DB_CONF = 
[
    'host' => '127.0.0.1',
    'port' => '3306',
    'name' => 'project_recipes',
    'user' => 'noorderpoort',
    'pass' => 'toets'
];

/**
 * De recepten-functies
 * 
 * - getAllRecipes() heb je nodig voor de indexpagina
 * - getSearchedRecipes($search) heb je nodig voor de zoekpagina
 * - getFavoriteRecipes($favorites) heb je nodig voor de favorietenpagina
 * - getRecipe($id_recipe) en getIngredients($id_recipe) heb je nodig voor de receptpagina
 * 
 * - extraatjes voor wie meer functionaliteiten wil toevoegen:
 * - getAllIngredients()
 * - getRecipesByIngredient($id_ingredient)
 */

function getAllRecipes()
{
    $query = '
        SELECT * 
        FROM recipes
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getSearchedRecipes($search)
{
    if ($search == '')
    {
        /**
         * Als $search een lege string is, wordt er niet gezocht
         */
        return [];
    }
    else
    {
        $query = '
            SELECT DISTINCT recipes.* 
            FROM recipes
            LEFT JOIN amounts ON id_recipe=recipes.id
            LEFT JOIN ingredients ON id_ingredient=ingredients.id
            WHERE recipes.name LIKE :search
            OR recipes.description LIKE :search
            OR ingredients.name LIKE :search
        ';
        $statement = Database::getInstance()->getPdo()->prepare($query);
        $statement->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }  
}

function getFavoriteRecipes($favorites)
{
    $favorites = str_replace(' ', '', $favorites);  // verwijder spaties
    if ($favorites == '')
    {
        /**
         * Als $favorites een lege string is, wordt er niet gezocht
         */
        return [];
    }
    else
    {
        $favorites = explode(',', $favorites);
        $placeholders = ':fav' . join(', :fav', array_keys($favorites));
        $query = '
            SELECT * 
            FROM recipes
            WHERE id IN (' . $placeholders . ')
        ';
        $statement = Database::getInstance()->getPdo()->prepare($query);
        foreach($favorites as $key => $favorite)
        {
            $statement->bindValue(':fav' . $key, $favorite, PDO::PARAM_INT);
        }
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

function getRecipe($id_recipe)
{
    $query = '
        SELECT * 
        FROM recipes
        WHERE id=:id_recipe
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->bindValue(':id_recipe', $id_recipe, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getIngredients($id_recipe)
{
    $query = '
        SELECT amount, units.name as unit, ingredients.name as ingredient
        FROM amounts
        JOIN ingredients ON id_ingredient=ingredients.id
        LEFT JOIN units ON id_unit=units.id
        WHERE id_recipe=:id_recipe
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->bindValue(':id_recipe', $id_recipe, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);    
}

function getAllIngredients()
{
    $query = '
        SELECT DISTINCT ingredients.* 
        FROM ingredients
        JOIN amounts ON id_ingredient=ingredients.id
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);        
}

function getIngredient($id_ingredient)
{
    $query = '
        SELECT * 
        FROM ingredients
        WHERE id=:id_ingredient
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->bindValue(':id_ingredient', $id_ingredient, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getRecipesByIngredient($id_ingredient)
{
    $query = '
        SELECT recipes.* 
        FROM recipes
        JOIN amounts ON id_recipe=recipes.id
        WHERE id_ingredient=:id_ingredient
    ';
    $statement = Database::getInstance()->getPdo()->prepare($query);
    $statement->bindValue(':id_ingredient', $id_ingredient, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);    
}

/**
 * De database class met de PDO-connectie, nodig voor bovenstaande functies
 */
 
class Database
{
    /**
     * het database-object
     */
    private static $instance;
    
    /**
     * het pdo-object
     */
    private $pdo;
    
    /**
     * de constructor
     */
    private function __construct()
    {   
        extract(DB_CONF); // zet de array om in variabelen
        
        $dsn = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $name;
		
        $this->pdo = new PDO($dsn, $user, $pass);
		
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    /**
     * de magic clone-method
     */
    private function __clone()
    {
        // gebruiken we niet
    }
    
    /**
     * de getter voor het database-object
     */
    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * de getter voor het pdo-object
     */
    public function getPdo()
    {
        return $this->pdo;
    }    
}

?>