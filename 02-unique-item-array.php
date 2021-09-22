<?php
/*
 * TODO: Mencari nilai yang unik dari 2 buah array
 * */

/*
 * Solusi:
 * */

$firstArr = [5,2,6,1,7,2,8,4,5];
$secondArr = [9,6,4,5,5,2,3,1];

$results = array();

$results = $firstArr;

$lengthSecondArr = count($secondArr);

//Combine first to second
for($i = 0; $i < $lengthSecondArr; $i++) {
    $nextIndex = count($results) + 1;
    $results[$nextIndex] = $secondArr[$i];
}

$lengthResult = count($results);
$temporaryArr = array();

$k = 0;

for($i = 0; $i < $lengthResult - 1; $i++) {
    if($results[$i] !== $results[$i+1]) {
        $temporaryArr[$k++] = $results[$i];
        $temporaryArr[$k++] = $results[$lengthResult-1];
    }
}

for ($j = 0; $j < $lengthResult; $j++) {
    $results[$j] = $temporaryArr[$j];
}

print_r($results);


