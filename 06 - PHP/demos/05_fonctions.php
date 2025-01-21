<?php

function helloWorld() {
    echo "Hello, world!";
}

function sayHello($name) {
    echo "Hello $name";
}

function sayHelloDefault($name = "Thomas") {
    echo "Hello $name";
}

function modifyReference(&$name) {
    $name = 'Jason';
}

function sayALot(...$parameters) {
    echo $parameters;
}

function typedParameters(int $a, int $b) {
    return $a + $b;
}

$lambda = fn($x) => $x**2;