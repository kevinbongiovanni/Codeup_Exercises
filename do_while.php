<?php

$a = 0;
do {
    echo "\$a is equal to {$a}\n";
    $a += 2;
} while ($a <= 100);



$a = 100;
do {
    echo "\$a is equal to {$a}\n";
    $a -= 5;
} while ($a >= -10);

$a = 2;

do {
    echo "\$a is equal to {$a}\n";
    $a *= 2;
} while ($a < 1000000);