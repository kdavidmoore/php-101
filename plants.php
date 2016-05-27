<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/plant.class.php');

function renderPlantInfo($obj){
	return $obj->getGenusSpecies() . ", part of the " . $obj->getFamily() . " family, is located in " . $obj->getDistribution() . ".\n";
}

$poison_ivy = new Plant();
$poison_ivy->setFamily('Cashew');
$poison_ivy->setGenusSpecies('Toxicodendron', 'radicans');
$poison_ivy->setDistribution('North America');

echo renderPlantInfo($poison_ivy);