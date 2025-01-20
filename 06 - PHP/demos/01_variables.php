<?php

// Commentaire sur une ligne
# Commentaire sur une ligne

/*
1. commentaire
2. multi
3. lignes
*/

// Pour écrire dans le terminal on utilise echo :
echo "Hello\n";
echo("Hello" . "world\n");

// Définition de variables
$uneChaine = "Salut la team"; // string
$estRouge = false; // bool
$ageChien = 3; // int
$partDuPIB = 3.5; // float

echo $uneChaine;

// Utilisation d'une constante de PHP : End Of Line
echo PHP_EOL;

// Déclaration de constantes
// constante définie lors de la compilation
const RETOUR_LIGNE = "\n";

// constante définie lors du runtime
define("DEFAULT_USER", "admin");

echo DEFAULT_USER;

// Concaténation de chaînes à l'aide echo
echo DEFAULT_USER, RETOUR_LIGNE, $uneChaine, RETOUR_LIGNE;

// gettype nous permet de récupérer le type d'une variable
echo gettype(DEFAULT_USER), RETOUR_LIGNE;
echo gettype($estRouge), RETOUR_LIGNE;

// Print fonctionne exactement comme echo mais n'accepte qu'un argument et renvoie toujours 1
print($uneChaine);
print $uneChaine;
echo print($uneChaine);

// Readline nous permet de lire depuis la console
$identifiant = readline("Saisir un id: ");
echo $identifiant;

// On peut caster le type string vers un autre type avec cette syntaxe :
$age = (int)readline("Saisir un âge: ");
echo $age, gettype($age);

// Chaînes de caractères
$monMessage = 'hello\nvousallezbien?';
echo $monMessage, RETOUR_LIGNE;
$monMessage2 = "hello\nvousallezbien?";
echo $monMessage2, RETOUR_LIGNE;

// Supprime la variable du registre
unset($monMessage);