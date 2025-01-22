<?php

require_once __DIR__ . '/Classes/MowerController.php';

$input = "5 5\n1 2 N\nGAGAGAGAA\n3 3 E\nAADAADADDA";
$controller = new MowerController($input);

$controller->run();