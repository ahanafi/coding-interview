<?php
/*
 * TODO: Membuat fungsi fibonacci number: 0, 1, 1, 2, 3, 5, 8, 13, dst
 * */

function printFibonaciNumber($length) {
    $prevNumber = 0;
    $nextNumber = 1;

    $currentNumber = null;

    $result = "";
    for ($i = 0; $i < $length; $i++) {
        $currentNumber = $prevNumber;
        $prevNumber = $nextNumber;

        $result .= $currentNumber . " ";

        $nextNumber = $currentNumber + $prevNumber;
    }

    return $result;
}

echo printFibonaciNumber(8) . PHP_EOL;
echo printFibonaciNumber(20) . PHP_EOL;
