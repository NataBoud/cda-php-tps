<?php

// Déclaration d'une classe
class Instrument
{

    // Déclaration des attributs
    public string $name;
    protected int $cordes;
    private bool $isPlaying = false;

    public function __construct(string $name, int $cordes)
    {
        $this->name = $name;
        $this->cordes = $cordes;
    }

    function play()
    {
        $this->isPlaying = true;
    }

    function stop()
    {
        $this->isPlaying = false;
    }

    public function getCordes(): int
    {
        return $this->cordes;
    }
}

// Utilisation de classes statiques
class MathExtended
{
    use SayHello;
    public static float $pi = 3.14159265359;

    public static function areaCircle(float $r)
    {
        return self::$pi * $r ** 2;
    }
}

// Abstraction de classes: regrouper des comportements commun
abstract class Person
{
    public abstract function talk();
}

class Salary extends Person
{
    public function talk()
    {
        echo "Je parle car je suis un salarié";
    }
}

class BodyGuard extends Person
{
    use SayHello;
    public function talk()
    {
        echo "Je protège le salarié";
    }
}

// Interface : methodes publiques que doivent implémenter une classe
interface Repository {
    function save();
    function remove();
    function add();
    function update();
}

class UserRepository implements Repository {
    
    public function save() {

    }

    public function remove() {

    }

    public function add() {

    }

    public function update() {

    }
}

// Element de code réutilisable dans plusieurs classes non forcément connexes
trait SayHello {
    public function hello() {
        echo "\nhello\n";
    }
}



$guitare = new Instrument("Guitare 12 cordes", 12);
echo $guitare->name;

echo $guitare->getCordes();

echo "La valeur de pi est: ", MathExtended::$pi, PHP_EOL;

echo "L'aire d'un cercle de rayon 4 est de : ", MathExtended::areaCircle(4);

$math = new MathExtended();
$math->hello();
$bodyguard = new BodyGuard();
$bodyguard->hello();

$guitareJson = json_encode($guitare);

$tableau = json_decode($guitareJson);
var_dump($tableau);
