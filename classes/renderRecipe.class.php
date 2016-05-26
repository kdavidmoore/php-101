<?php

class RenderRecipe
{
	// RenderRecipe and render have access to title because it is protected not private
	public static function render($theRecipe){
		return $theRecipe->title . " submitted by " . $theRecipe->getSource() . " with rating " . $theRecipe->getRating() . "\n";
	}
}