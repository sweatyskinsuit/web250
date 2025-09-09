<?php

class Pet
{
    var $vertebrateType;
    var $legCount;
    var $hasFur;

    function allowedLooseInside()
    {
        return true;
    }
}

class Cat extends Pet
{
    var $vertebrateType = 'mammal';
    var $legCount = 4;
    var $hasFur = true;
    var $hasWhiskers = true;

    function allowedLooseInside()
    {
        return true;
    }
}

class Snake extends Pet
{
    var $vertebrateType = 'reptile';
    var $legCount = 0;
    var $hasFur = false;

    function allowedLooseInside()
    {
        return false;
    }
}

class Bird extends Pet
{
    var $vertebrateType = 'bird';
    var $legCount = 2;
    var $canFly = true;

    function allowedLooseInside()
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
