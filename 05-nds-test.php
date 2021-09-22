<?php
/*
 * This file is coding test in NDS Company
 * */

//1 TODO: Membuat fungsi untuk menghasilkan deret pantulan bola

function bubbleBall(int $input) {
    $result = "";
    while((float) $input >= 0.5) {
        $result .= $input . ", ";
        $input /= 2;
    }

    return $result;
}

echo bubbleBall(4) . PHP_EOL;
echo bubbleBall(7) . PHP_EOL;
echo bubbleBall(10) . PHP_EOL;
echo bubbleBall(50) . PHP_EOL;

//2 TODO: Menghitung biaya sewa
function hitungBiayaSewa($jamKeluar, $jamKembali) {
    if($jamKembali < $jamKeluar) {
        $jamKembali += 12;
    }

    $biayaDuaJamPertama = 200000;       //200.000
    $biayaPerJamBerikutnya = 50000;     //50.000

    $biayaSewa = 0;
    $lamaSewa = $jamKembali - $jamKeluar;
    if($lamaSewa > 2) {
        $jamLebih = $lamaSewa - 2;
        $biayaSewa = $biayaDuaJamPertama + ($jamLebih * $biayaPerJamBerikutnya);
    } else {
        $biayaSewa = $biayaDuaJamPertama;
    }

    return $biayaSewa;
}

echo hitungBiayaSewa(10,11) . PHP_EOL;
echo hitungBiayaSewa(10,3). PHP_EOL;

//3 TODO:
//4 TODO:
//5 TODO:
