<?php

namespace App\DTOs;

class Todo {
    public function __construct(public string $name, public string $description, public bool $isDone) {
    }
}