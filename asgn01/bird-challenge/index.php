<?php

class Bird
{
    var $commonName;
    var $food = "bugs";
    var $nestPlacement = "tree";
    var $conservationLevel;

    function song()
    {
        if ($this->commonName == "Eastern Towhee") {
            return "drink-your-tea!";
        } elseif ($this->commonName == "Indigo Bunting") {
            return "what what!!";
        } else {
            return "other bird song";
        }
    }

    function canFly()
    {
        if ($this->commonName == "Eastern Towhee") {
            return "This bird can fly";
        } elseif ($this->commonName == "Indigo Bunting") {
            return "This bird can fly";
        } else {
            return "It is unknown whether this bird can fly";
        }
    }
}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->conservationLevel = 'Low';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadsides, and railroad rights-of-wafields and on the edges';
$bird2->conservationLevel = 'Low';

echo "The " . $bird1->commonName . " sings " . $bird1->song() . "<br>";
echo $bird1->canFly() . "<br>";
echo "It eats " . $bird1->food . "<br>";
echo "It's conservation level is " . $bird1->conservationLevel . "<br>";

echo "The " . $bird2->commonName . " sings " . $bird2->song() . "<br>";
echo $bird2->canFly() . "<br>";
echo "It eats " . $bird2->food . "<br>";
echo "It's conservation level is " . $bird2->conservationLevel . "<br>";
