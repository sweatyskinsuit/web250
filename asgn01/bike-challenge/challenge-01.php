
<?php
class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;
    //methods
    function bicycle_name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value)
    {
        return $this->weight_kg = floatval($value) / 2.2046226218;
    }
}
//instantiated and properties
$bicycle1 = new Bicycle;
$bicycle1->brand = 'Trek';
$bicycle1->model = 'Domane AL 3';
$bicycle1->year = '2023';
$bicycle1->description = 'Entry-level endurance road bike with aluminum frame, carbon fork, and Shimano Claris 8-speed drivetrain. Features disc brakes and comfortable geometry for long rides.';
$bicycle1->weight_kg = 10.2;

$bicycle2 = new Bicycle;
$bicycle2->brand = 'Cannondale';
$bicycle2->model = 'Synapse';
$bicycle2->year = '2016';
$bicycle2->weight_kg = 8.0;
$bicycle2->description = `Entry-level endurance road bike with comfortable geometry and lightweight aluminum frame. Features Cannondale's SAVE micro-suspension technology for vibration dampening on long rides.`;

echo $bicycle1->bicycle_name() . "<br>";
echo $bicycle2->bicycle_name() . "<br>";

echo $bicycle1->weight_kg . "<br>";
echo $bicycle2->weight_lbs() . "<br>";

$bicycle1->set_weight_lbs(2);
echo $bicycle1->weight_kg . "<br>";
echo $bicycle1->weight_lbs() . "<br>";

$class_methods = get_class_methods('Bicycle');
echo "class methods: " . implode(', ', $class_methods) . "<br>";

if (method_exists('Bicycle', 'bicycle_name')) {
    echo "<p>Method bicycle_name() exists in Bicycle class.</p>";
} else {
    echo "<p>Method bicycle_name() does not exist in Bicycle class.</p>";
}

if (method_exists('Bicycle', 'weight_lbs')) {
    echo "<p>Method weight_lbs() exists in Bicycle class.</p>";
} else {
    echo "<p>Method weight_lbs() does not exist in Bicycle class.</p>";
}

if (method_exists('Bicycle', 'set_weight_lbs')) {
    echo "<p>Method set_weight_lbs() exists in Bicycle class.</p>";
} else {
    echo "<p>Method set_weight_lbs() does not exist in Bicycle class.</p>";
}

?>
