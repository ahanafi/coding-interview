<?php
/*
 * TODO: Cari Nilai terkecil dan terbesar dari suatu array tanpa menggunakan fungsi built in dari bahasa program yang digunakan
 * */

/*
 * Solusi: Menggunakan logika bubble sort, kemudian dapat kan data index pertama dan terakhir
 * */

function solutions(array $numbers)
{
    $lenthArray = count($numbers);
    for ($i = 0; $i < $lenthArray; $i++) {
        for($j = 0; $j < $lenthArray - 1; $j++) {
            if($numbers[$j] > $numbers[$j+1]) {
                $temporary = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temporary;
            }
        }
    }

    $smallest = $numbers[0];
    $highest = $numbers[$lenthArray - 1];

    return "The smallest number is " . $smallest . " and the highest is " . $highest . PHP_EOL;
}

echo solutions([64, 34, 25, 12, 22, 11, 90]);
echo solutions([6,37,2,100,27,18,3,98,1,74,89,923]);