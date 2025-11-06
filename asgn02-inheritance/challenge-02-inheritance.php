<?php

class Pet
{
    protected $vertebrateType;
    public $legCount;
    public $hasFur;

    function allowedLooseInside()
    {
        return true;
    }
}

class Cat extends Pet
{
    public $vertebrateType = 'mammal';
    public $legCount = 4;
    public $hasFur = true;
    public $hasWhiskers = true;

    public function allowedLooseInside()
    {
        return true;
    }
}

class Snake extends Pet
{
    public $vertebrateType = 'reptile';
    public $legCount = 0;
    public $hasFur = false;

    public function allowedLooseInside()
    {
        return false;
    }
}

class Bird extends Pet
{
    public $vertebrateType = 'bird';
    public $legCount = 2;
    public $canFly = true;

    public function allowedLooseInside()
    {
        return true;
    }
}

$firstPet = new Cat();
$secondPet = new Snake();
$thirdPet = new Bird();

echo $firstPet->vertebrateType . '<br>';
echo $firstPet->legCount . '<br>';
echo $firstPet->hasWhiskers . '<br>';

echo $secondPet->vertebrateType . '<br>';
echo $secondPet->legCount . '<br>';
echo $secondPet->hasFur . '<br>';

echo $thirdPet->vertebrateType . '<br>';
echo $thirdPet->legCount . '<br>';
echo $thirdPet->canFly . '<br>';
