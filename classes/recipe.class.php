<?php

class Recipe
{
	// protected properties are accessible only by the class and its children (RenderRecipe)
	protected $title;
	public $ingredients = array();
	public $source = "Will's Kitchen";
	public $instructions;
	public $rating = "unrated";
	
	// add some public methods
	
	public function setTitle($title){
		$this->title = ucwords($title);
	}
	
	public function getTitle(){
		// return the title of the class
		return $this->title;
	}

	private $allowedMeasurements = array(
		'tsp', 'T', 'tbsp', 'C', 'cup', 'cups', 'oz', 'fl oz', 'bag'
	);

	public function addIngredient($item, $amount = null, $measurement = null){
		// amount and measurement are optional parameters and are set to null if not included
		
		if(($measurement !== null) && (!in_array($measurement, $allowedMeasurements))){

			die($measurement . " is not a valid measurement.");
		}

		$this->ingredients[] = array(
			'item' => ucwords($item),
			'amount' => $amount,
			'measure' => strtolower($measurement)
		);
	}
}