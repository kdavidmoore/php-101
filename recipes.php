<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/recipe.class.php');
require_once('classes/renderRecipe.class.php');

// create a new object of class recipe
$recipe = new Recipe();
// assign 'Chicken Soup' to the title property 

$recipe->setTitle('Chicken Soup');

// populate the ingredients array
$recipe->addIngredient('broth', 2, 'cups');
$recipe->addIngredient('chicken', 1, 'lbs');
$recipe->addIngredient('noodles');

// call the static render method of the RenderRecipe class
echo RenderRecipe::render($recipe);
exit;