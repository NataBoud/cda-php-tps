<?php

require_once 'Pelouse.php';

class Tondeuse {
    private $x;
    private $y;
    private $orientation;
    private $pelouse;

    private $orientations = ['N', 'E', 'S', 'W'];

    public function __construct(int $x, int $y, string $orientation, Pelouse $pelouse) {
        $this->x = $x;
        $this->y = $y;
        $this->orientation = $orientation;
        $this->pelouse = $pelouse;
    }

    public function executeInstructions(string $instructions): void {
        foreach (str_split($instructions) as $instruction) {
            switch ($instruction) {
                case 'G':
                    $this->tournerGauche();
                    break;
                case 'D':
                    $this->tournerDroite();
                    break;
                case 'A':
                    $this->avancer();
                    break;
            }
        }
    }

    private function tournerGauche(): void {
        $currentIndex = array_search($this->orientation, $this->orientations);
        $this->orientation = $this->orientations[($currentIndex + 3) % 4];
    }

    private function tournerDroite(): void {
        $currentIndex = array_search($this->orientation, $this->orientations);
        $this->orientation = $this->orientations[($currentIndex + 1) % 4];
    }

    private function avancer(): void {
        $newX = $this->x;
        $newY = $this->y;

        switch ($this->orientation) {
            case 'N':
                $newY++;
                break;
            case 'E':
                $newX++;
                break;
            case 'S':
                $newY--;
                break;
            case 'W':
                $newX--;
                break;
        }

        if ($this->pelouse->isPositionValid($newX, $newY)) {
            $this->x = $newX;
            $this->y = $newY;
        }
    }

    public function getPositionFinale(): string {
        return "$this->x $this->y $this->orientation";
    }
}