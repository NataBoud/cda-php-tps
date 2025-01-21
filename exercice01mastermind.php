<?php

// Red, Green, Blue, Yellow, Purple, Orange
const COLORS = ['R', 'G', 'B', 'Y', 'P', 'O'];

// Génération d'une combinaison random
function generateCombination(array $colors): string
{
    $combination = '';

    for ($i = 0; $i < 4; $i++) {
        $random = random_int(0, count($colors) - 1);
        $combination .= $colors[$random];
        array_splice($colors, $random, 1);
    }

    return $combination;
}

// Vérification de la validité des entrées de l'utilisateur
function isValidCombination(string $combination, array $colors): bool
{
    // Couleurs valides
    foreach (str_split($combination) as $color) {
        if (in_array($color, $colors) == false)
            return false;
    }
    return true;
}

// Vérification de la validité de la taille de la chaîne
function isValidLength(string $combination, int $maxLength): bool
{
    return strlen($combination) === $maxLength;
}

// Permet de savoir si le jeu est fini
function isGameOver(string $userCombination, string $secretCombination, int $rounds): bool
{
    return ($userCombination == $secretCombination) || $rounds >= 10;
}

function calculateHints(string $userCombination, string $secretCombination): array
{

    $goodPosition = 0;
    $goodLetter = 0;

    $userArrayCombination = str_split($userCombination);
    $secretArrayCombination = str_split($secretCombination);

    for ($counter = 0; $counter < count($userArrayCombination); $counter++) {
        if ($userArrayCombination[$counter] === $secretArrayCombination[$counter]) {
            $goodPosition++;
        } else if (in_array($userArrayCombination[$counter], $secretArrayCombination)) {
            $goodLetter++;
        }
    }

    return [$goodPosition, $goodLetter];
}

function generateHints(array $hints): string
{

    $stringHints = '';
    $goodPosition = 'O';
    $goodLetter = 'X';
    $none = '-';

    // Biens placés
    $stringHints .= str_repeat($goodPosition, $hints[0]);

    // Bonnes couleurs
    $stringHints .= str_repeat($goodLetter, $hints[1]);

    // Mauvaises couleurs
    $stringHints .= str_repeat($none, 4 - array_sum($hints));

    return $stringHints;
}

function splashScreen(): void
{

    echo <<<EOD
                 _                 _       _ 
   _____ ___ ___| |_ ___ ___ _____|_|___ _| |
  |     | .'|_ -|  _| -_|  _|     | |   | . |
  |_|_|_|__,|___|_| |___|_| |_|_|_|_|_|_|___|
  \n
  EOD;
}

// Vérification de la saisie de l'utilisateur
function readUserCombination(array $colors): string
{
    $userCombination = readline("\nSaisir combinaison: ");

    while (isValidCombination($userCombination, $colors) === false || isValidLength($userCombination, 4) === false) {
        echo "Erreur de saisie.\n";
        $userCombination = readline("Saisir combinaison: ");
    }

    return $userCombination;
}

// Permet d'afficher le round en cours
function showRound(int $round): void
{
    $stringRound = sprintf('%02d', $round);
    echo <<<EOT
  ################################
  #          ROUND N°: $stringRound        #
  ################################\n
  EOT;
}

// Sauvegarde l'historique de la partie
function saveHistory(string &$history, string $hints, string $userCombination) : string
{
    $history .= "$hints | $userCombination\n";
    return $history;
}

function run()
{
    $secretCombination = generateCombination(COLORS);
    $userCombination = '';
    $rounds = 0;
    $history = '';

    splashScreen();

    do {
        $rounds++;

        showRound($rounds);

        echo $history;

        $userCombination = readUserCombination(COLORS);

        $hints = calculateHints($userCombination, $secretCombination);

        $stringHints = generateHints($hints);

        saveHistory($history, $stringHints, $userCombination);
    } while (isGameOver($userCombination, $secretCombination, $rounds) == false);


    if ($userCombination === $secretCombination) {
        echo "\nVous avez gagné!\n";
    } else {
        echo "\nPerdu.\n";
    }

    echo "Combinaison secrète: '$secretCombination'";
}

run();
