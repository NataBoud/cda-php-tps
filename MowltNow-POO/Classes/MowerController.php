<?php

require_once(__DIR__ . '/Mower.php');
require_once(__DIR__ . '/Lawn.php');

class MowerController
{
    private SurfaceInterface $surface;
    private array $mowers = [];

    public function __construct(string $input)
    {
        // Sépare l'input par lignes  
        // explode Разбивает символьную строку на сегменты []
        $lines = explode("\n", trim($input));

        // Ligne 1 : "5 5" Dimensions de la surface 
        // ce que retourne array_shift($lines), c'est la ligne retirée :"5 5" du tableau $lines = [
        //  "5 5",         
        // "1 2 N",
        // "GAGAGAGAA",
        // "3 3 E",
        // "AADAADADDA"
        //      ];
        [$width, $height] = explode(' ', array_shift($lines));

        $this->surface = new Lawn((int)$width, (int)$height);

        // Lecture des tondeuses
        while (!empty($lines)) {
            [$x, $y, $direction] = explode(' ', array_shift($lines));
            $commands = array_shift($lines);

            // Création des tondeuses et ajout dans le tableau
            $mower = new Mower((int)$x, (int)$y, $direction, $this->surface);
            $this->mowers[] = ['mower' => $mower, 'commands' => $commands];
        }
    }

    // Exécuter les commandes pour chaque tondeuse
    public function run(): void
    {
        foreach ($this->mowers as $entry) {
            /** @var Movable $mower */
            $mower = $entry['mower'];
            $commands = str_split($entry['commands']);

            foreach ($commands as $command) {
                $mower->executeCommand($command);
            }
            echo $mower->getPosition() . PHP_EOL;
        }
    }
}
