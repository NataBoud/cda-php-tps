<?php 

// Les opérateur arithmétiques
echo "1 + 1 = ", 1 + 1, PHP_EOL;
echo "2 - 1 = ", 2 - 1, PHP_EOL;
echo "2 * 2 = ", 2 * 2, PHP_EOL;
echo "2 / 4 = ", 2 / 4, PHP_EOL;
echo "4 % 2 = ", 4 % 2, PHP_EOL;
echo "2 ** 4 = ", 2 ** 4, PHP_EOL;

// Concaténation de chaînes de caractères
echo "'toto' . 'tata' = ", 'toto' . 'tata', PHP_EOL;

echo 'Declaration de la variable $nombre = 3', PHP_EOL;
$nombre = 3;

// Opérateurs d'affectation
$nombre += 1;
echo '$nombre += 1 = ', $nombre, PHP_EOL;

$nombre -= 1;
echo '$nombre -= 1 = ', $nombre, PHP_EOL;

$nombre *= 2;
echo '$nombre *= 2 = ', $nombre, PHP_EOL;

$nombre /= 2;
echo '$nombre /= 2 = ', $nombre, PHP_EOL;

$nombre %= 2;
echo '$nombre %= 2 = ', $nombre, PHP_EOL;

echo 'Declaration de la variable $chaine = "hello"', PHP_EOL;
$chaine = "hello";

$chaine .= " world!";
echo '$chaine .= " world!" = ', $chaine, PHP_EOL;

// Opérateurs de comparaison
echo "'1' == 1 = ", boolTostring('1' == 1), PHP_EOL;
echo "'1' === 1 = ", boolTostring('1' === 1), PHP_EOL;
echo "1 > 1 = ", boolTostring(1 > 1), PHP_EOL;
echo "1 >= 1 = ", boolTostring(1 >= 1), PHP_EOL;
echo "1 < 1 = ", boolTostring(1 < 1), PHP_EOL;
echo "1 <= 1 = ", boolTostring(1 <= 1), PHP_EOL;
echo "'1' != 1 = ", boolTostring('1' != 1), PHP_EOL;
echo "'1' !== 1 = ", boolTostring('1' !== 1), PHP_EOL;

// Opérateurs unaires
$compteur = 0;
echo '$compteur = 0;', PHP_EOL;

$compteur++;
echo '$compteur++ = ', $compteur, PHP_EOL;

$compteur++;
echo '$compteur-- = ', $compteur, PHP_EOL;

++$compteur;

// opérateurs de comparaison
// ici les deux expression doivent être vraies
echo '12 > 3 && strlen("arthur") < 2 = ', boolTostring(12 > 3 && strlen("arthur") < 2), PHP_EOL;
echo '12 > 3 and strlen("arthur") < 2 = ', boolTostring(12 > 3 and strlen("arthur") < 2), PHP_EOL;

// L'une ou l'autre expression doit être vraie
echo '12 > 3 || strlen("arthur") < 2 = ', boolTostring(12 > 3 || strlen("arthur") < 2), PHP_EOL;
echo '12 > 3 or strlen("arthur") < 2 = ', boolTostring(12 > 3 || strlen("arthur") < 2), PHP_EOL;

// Différent de : renvoie l'inverse
echo '!true = ', boolTostring(!true), PHP_EOL;

function boolTostring(bool $bool) {
    return $bool === true ? 'true' : 'false';
}