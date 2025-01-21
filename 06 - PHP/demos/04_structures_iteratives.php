<?php

$compteur = 0;

while($compteur < 3) {
    $compteur++;
    echo $compteur;
}

for($i = 0; $i < 5; $i++) {
    echo "for: $i";
};


do {
    $compteur--;
    echo "do while: $compteur";
} while($compteur >= 0);


$fruits = ['tomate', 'avocat', 'orange', 'pêche'];

foreach($fruits as $fruit) {
    echo "foreach: $fruit";
}