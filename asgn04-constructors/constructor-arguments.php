<?php

class Bird
{
    public $commonName;

    public $latinName;

    public function __construct($args = [])
    {
        $this->commonName = $args['commonName'] ?? '';
        $this->latinName = $args['latinName'] ?? '';
    }
}

$bird1 = new Bird([
    'commonName' => "Acadian Flycatcher",
    'latinName' => "Empidonax virescens"
]);
echo 'Common name: ' . $bird1->commonName . '<br>';
echo 'Latin name: ' . $bird1->latinName . '<br>';
echo '<hr>';
$bird2 = new Bird([
    'commonName' => "Carolina Wren",
    'latinName' => "Thyrothorus ludovicianus"
]);
echo 'Common name: ' . $bird2->commonName . '<br>';
echo 'Latin name: ' . $bird2->latinName . '<br>';
echo '<hr>';
