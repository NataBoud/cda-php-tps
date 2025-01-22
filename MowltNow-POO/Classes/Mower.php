<?php 

require_once(__DIR__ . '/../Interfaces/MovableInterface.php'); 
require_once(__DIR__ . '/../Classes/Lawn.php');       

class Mower implements MovableInterface 
{
    private int $x;
    private int $y;
    private string $direction;
    private SurfaceInterface $surface;

    public function __construct(int $x, int $y, string $direction, SurfaceInterface $surface) 
    {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
        $this->surface = $surface;
    }

    public function getPosition(): string 
    {
        return "{$this->x} {$this->y} {$this->direction}";
    }

    private function turnLeft(): void
    {
        $this->direction = match ($this->direction) {
            'N' => 'W',
            'W' => 'S',
            'S' => 'E',
            'E' => 'N',
        };
    }

    private function turnRight(): void
    {
        $this->direction = match ($this->direction) {
            'N' => 'E',
            'E' => 'S',
            'S' => 'W',
            'W' => 'N',
        };
    }

    private function moveForward(): void 
    {
        $newX = $this->x;
        $newY = $this->y;
        
        match ($this->direction) {
            'N' => $newY++,
            'E' => $newX++,
            'S' => $newY--,
            'W' => $newX--, 
        };

        if ($this->surface->isValidPosition($newX, $newY)) {
            $this->x = $newX;
            $this->y = $newY;
        }
    }

    public function executeCommand(string $command): void
    {
        match ($command) {
            'G' => $this->turnLeft(),
            'D' => $this->turnRight(),
            'A' => $this->moveForward(),
            default => throw new InvalidArgumentException("Commande invalide: $command"),
        };
    }
}

