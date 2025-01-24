<?php

require_once 'Pelouse.php';
require_once 'Tondeuse.php';
require_once 'Simulation.php';


$pelouse = new Pelouse(5, 5);

$instructions = [
    "1 2 N", "GAGAGAGAA",
    "3 3 E", "AADAADADDA"
];

// Lancer la simulation
$simulation = new Simulation($pelouse);
$resultats = $simulation->lancer($instructions);

// Afficher les résultats
foreach ($resultats as $resultat) {
    echo $resultat . PHP_EOL;
}

