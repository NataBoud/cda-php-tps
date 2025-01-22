<?php 

interface MovableInterface {
    public function executeCommand(string $command) : void; 
    public function getPosition() : string; 
};