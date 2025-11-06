<?php
function addNumbers($a, $b)
{
    $sum = $a + $b;
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
$total = 0;
foreach ($numbers as $num) {
    $total = addNumbers($total, $num); // good spot for a breakpoint
}
echo "Final total is: $total<br>";

$total = addNumbers($total, $num);
