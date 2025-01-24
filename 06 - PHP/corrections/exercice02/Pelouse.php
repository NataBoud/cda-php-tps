<?php

class Pelouse {
    private $maxX;
    private $maxY;

    public function __construct($maxX, $maxY) {
        $this->maxX = $maxX;
        $this->maxY = $maxY;
    }

    public function isPositionValid(int $x, int $y): bool {
        return $x >= 0 && $x <= $this->maxX && $y >= 0 && $y <= $this->maxY;
    }
}



