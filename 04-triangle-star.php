<?php
/*
 * TODO: Membuat segitiga siku-siku dengan bintang
 * */

function printTriangleStar($length) {
    $result = "";

    for ($row = 0; $row < $length; $row++) {
        $result .= '*';

        for ($col = 1; $col <= $row; $col++) {
            $result .= ' *';
        }

        $result .= PHP_EOL;
    }

    return $result;
}

echo printTriangleStar(5);
echo printTriangleStar(20);
