<?php
$a = ["projetor 8", "projetor 9", ""];
$b = ["projetor 9", ""];

print_r($a);
echo "<br>" . "<br>";
print_r($b);
echo "<br>" . "<br>";

print_r(array_intersect($a, $b));