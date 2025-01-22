<?php 

require_once(__DIR__ . '/../Interfaces/SurfaceInterface.php');

class Lawn implements SurfaceInterface
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function isValidPosition(int $x, int $y): bool
    {
        return $x >= 0 && $x <= $this->width && $y >= 0 && $y <= $this->height;
    }
}
