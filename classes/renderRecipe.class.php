<?php

class RenderRecipe extends Recipe
{
	public static function render($theRecipe){
		// we have access to title because RenderRecipe extends Recipe
		return $theRecipe->title . " from " . $theRecipe->source . " contains " . $theRecipe->ingredients[0]['amount'] . " " . $theRecipe->ingredients[0]['measure'] . " of " . $theRecipe->ingredients[0]['item'] . ".\n";
	}
}