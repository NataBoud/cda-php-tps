<?php 

const RED = "\033[31m";
const GREEN = "\033[32m";
const YELLOW = "\033[33m";
const RESET = "\033[0m";

$validColors = [ 'R', 'B', 'V', 'J', 'O', 'P'];

// implode() — Rassemble les éléments d'un tableau en une chaîne
// echo "La combinaison secrète est : " . implode('', $combination);

// Combinaison secrète aléatoire
function generateCombination($validColors) {
    $combination = [];
    for ($i = 0; $i < 4; $i++) {
        $combination[] = $validColors[array_rand($validColors)]; // Ajoute une couleur aléatoire
    }
    return $combination;
}

// Demande une combinaison au joueur et la valide
function requestCombination($validColors) {
    do {
        echo YELLOW . "Entrez une combinaison de 4 couleurs parmi (R, B, V, J, O, P) : " . RESET . PHP_EOL;
        $combination = strtoupper(trim(fgets(STDIN)));  // Lecture et conversion en majuscules
        $isValid = true;
        
        // Vérifie si la combinaison a 4 lettres
        if (strlen($combination) != 4) {
            echo RED . "La combinaison doit comporter exactement 4 lettres.\n" . RESET . PHP_EOL;
            $isValid = false;
        }

        // Vérifie si chaque lettre fait partie des couleurs valides
        if ($isValid) {
            foreach (str_split($combination) as $letter) {
                if (!in_array($letter, $validColors)) {
                    echo RED . "La combinaison contient des lettres non valides. Utilisez uniquement (R, B, V, J, O, P).\n" . RESET . PHP_EOL;
                    $isValid = false;
                    break;
                }
            }
        }
    } while (!$isValid); 
    return str_split($combination); // Retourne la combinaison sous forme de tableau
}

// Donne les indices (pions noirs et blancs)
function giveIndice($secretCombination, $attempt) {
    $pionsNoirs = 0;
    $pionsBlancs = 0;
    // Copies pour manipulations
    $secretCombinationTemp = $secretCombination;
    $attemptTemp = $attempt; 
    
    // Pions noirs (bonnes couleurs aux bonnes positions)
    for ($i = 0; $i < 4; $i++) {
        if ($attempt[$i] == $secretCombination[$i]) {
            $pionsNoirs++;
            unset($secretCombinationTemp[$i]); 
            unset($attemptTemp[$i]); 
        }
    }

    // Pions blancs (bonnes couleurs mais mauvaises positions)
    foreach ($attemptTemp as $i => $letter) {
        $index = array_search($letter, $secretCombinationTemp);
        if ($index !== false) {
            $pionsBlancs++;
            unset($secretCombinationTemp[$index]); 
            unset($attemptTemp[$i]);
        }
    }
    return [$pionsNoirs, $pionsBlancs]; 
}

// Génération la combinaison secrète // Nombre de tentatives maximum
$secretCombination = generateCombination($validColors);
$maxTentatives = 10;

echo  GREEN . "Bienvenue dans le jeu Mastermind ! Vous avez $maxTentatives tentatives pour deviner la combinaison secrète.\n" . RESET . PHP_EOL;

for ($tentativeCount = 1; $tentativeCount <= $maxTentatives; $tentativeCount++) {
    echo  RED . "\nTentative $tentativeCount/$maxTentatives :\n" . RESET . PHP_EOL;
    // On commence
    $attempt = requestCombination($validColors);
    // Vérifier les indices (pions noirs et blancs)
    list($pionsNoirs, $pionsBlancs) = giveIndice($secretCombination, $attempt);

    // Afficher les indices
    echo GREEN . "Pions noirs (bonnes couleurs, bonnes positions) : $pionsNoirs\n". RESET . PHP_EOL;
    echo GREEN . "Pions blancs (bonnes couleurs, mauvaises positions) : $pionsBlancs\n" . RESET . PHP_EOL;

    // Vérifier si la combinaison est correcte
    if ($pionsNoirs == 4) {
        echo "Félicitations ! Vous avez deviné la combinaison secrète : " . implode('', $secretCombination) . "\n";
        break;
    }
    // Afficher un message de défaite et révéler la combinaison secrète
    if ($tentativeCount == $maxTentatives) {
        echo YELLOW . "Dommage ! Vous n'avez pas trouvé la combinaison secrète. Elle était : " . implode('', $secretCombination) . "\n" . RESET . PHP_EOL;
    }
}

