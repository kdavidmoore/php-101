<?php

class RenderRecipe extends Recipe
{
	public static function render($theRecipe){
		// we have access to title because RenderRecipe extends Recipe
		return $theRecipe->title . " contains " . $theRecipe->ingredients[0]['item'] . "\n";
	}
}