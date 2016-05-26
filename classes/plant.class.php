<?php

class Plant
{
	private $family;
	private $genus;
	private $species;
	private $distribution;

	public function getFamily(){
		return $this->family;
	}

	public function setFamily($family){
		$this->family = $family;
	}

	public function getGenusSpecies(){
		return $this->genus . ' ' . $this->species;
	}

	public function setGenusSpecies($genus, $species){
		$this->genus = $genus;
		$this->species = $species;
	}

	public function getDistribution(){
		return $this->distribution;
	}

	public function setDistribution($distro){
		$this->distribution = $distro;
	}

	public function renderPlantInfo(){
		return $this->getGenusSpecies() . ", part of the " . $this->getFamily() . " family, is located in " . $this->getDistribution() . ".\n";
	}
}