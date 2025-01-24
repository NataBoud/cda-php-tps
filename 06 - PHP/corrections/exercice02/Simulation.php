   <?php

   require_once 'Pelouse.php';
   require_once 'Tondeuse.php';

   class Simulation {
       private $pelouse;

       public function __construct(Pelouse $pelouse) {
           $this->pelouse = $pelouse;
       }

       public function lancer(array $instructions): array {
           $resultats = [];

           for ($i = 0; $i < count($instructions); $i += 2) {
               [$x, $y, $orientation] = explode(' ', $instructions[$i]);
               $tondeuse = new Tondeuse((int)$x, (int)$y, $orientation, $this->pelouse);
               $tondeuse->executeInstructions($instructions[$i + 1]);
               $resultats[] = $tondeuse->getPositionFinale();
           }

           return $resultats;
       }
   }

