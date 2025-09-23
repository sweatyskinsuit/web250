<?php

class Bird
{
    public static $instance_count = 0;
    public static $egg_num = 0;
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public $flying = "yes";

    function can_fly()
    {
        return $this->flying == "yes" ? "can fly" : "is stuck on the ground";
    }

    public static function create()
    {
        self::$instance_count++;
        return new Bird();
    }
}

class YellowBelliedFlyCatcher extends Bird
{
    public static $instance_count = 0;
    public static $egg_num = "3-4, sometimes 5.";
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";

    public static function create()
    {
        self::$instance_count++;
        return new YellowBelliedFlyCatcher();
    }
}
class Kiwi extends Bird
{
    public $name = "kiwi";
    public $diet = "omnivorous";
    public $flying = "no";

    public static function create()
    {
        self::$instance_count++;
        return new Kiwi();
    }
}
