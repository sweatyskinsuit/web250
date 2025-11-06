<?php

class Bird
{

    public $commonName;
    public $latinName;

    public function __construct($commonName, $latinName)
    {
        $this->commonName = $commonName;
        $this->latinName = $latinName;
    }
}

$bird1 = new Bird("Robin", "Turdus migratorius");
echo 'Common name: ' . $bird1->commonName . '<br>';
echo 'Latin name: ' . $bird1->latinName . '<br>';
echo '<hr>';
$bird2 = new Bird("Eastern Towhee", "Pipilo erythrophthalmus");
echo 'Common name: ' . $bird2->commonName . '<br>';
echo 'Latin name: ' . $bird2->latinName . '<br>';
echo '<hr>';
