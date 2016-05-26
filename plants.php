<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/plant.class.php');

$poison_ivy = new Plant();
$poison_ivy->setFamily('Cashew');
$poison_ivy->setGenusSpecies('Toxicodendron', 'radicans');
$poison_ivy->setDistribution('North America');

echo $poison_ivy->renderPlantInfo();