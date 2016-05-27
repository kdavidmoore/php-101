<?php

class Recipe
{
	// protected properties are accessible only by the class and its children (RenderRecipe)
	protected $title;
	protected $ingredients = array();
	protected $source = "Will's Kitchen";
	protected $instructions;
	protected $rating = "unrated";
	
	// if the title or source are not set
	function __construct($title = null, $source = null){
		if ($title !== null){
			$this->title = $title;
		}
		if ($source !== null){
			$this->source = $source;
		}
	}

	function __toString(){
		// if a script using this class tries to use a Recipe object as a string, this gets returned:
		return "You are printing and object of type: " . __CLASS__ . ". It has a title of " . $this->title;
	}

	// add some public methods
	
	public function setTitle($title){
		$this->title = ucwords($title);
	}
	
	public function getTitle(){
		// return the title of the class
		return $this->title;
	}

	private $allowedMeasurements = array(
		'tsp', 'T', 'tbsp', 'C', 'cup', 'cups', 'oz', 'fl oz', 'bag', 'lbs'
	);

	public function addIngredient($item, $amount = null, $measurement = null){
		// amount and measurement are optional parameters and are set to null if not included
		
		if(($measurement !== null) && (!in_array(strtolower($measurement), $this->allowedMeasurements))){

			die($measurement . " is not a valid measurement.");
		}

		$this->ingredients[] = array(
			'item' => strtolower($item),
			'amount' => $amount,
			'measure' => strtolower($measurement)
		);
	}
}