<?php
$a = array("a" => "manzana", "b" => "banano");
$b = array("a" => "pera", "b" => "fresa", "c" => "cereza");
$c = $a + $b; // Unión de $a y $b
echo "Unión de \$a y \$b: \n";
var_dump($c);
$c = $b + $a; // Unión de $b y $a
echo "Unión de \$b y \$a: \n";
var_dump($c);
?>
