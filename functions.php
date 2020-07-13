<?php

function zakatHasil($pendapatan, $pendapatanLain, $hutang)
{
    $hasil = 2.5 / 100 * ($pendapatan + $pendapatanLain - $hutang);
    return $hasil;
}

function zakatMal($nilaiEmas, $uang, $aset, $hutang)
{
    $hasil = 2.5 / 100 * ($nilaiEmas + $uang + $aset - $hutang);
    return $hasil;
}

function zakatMas($jumlah)
{
    $emasSaatIni = 932176;

    $hasil = $jumlah * $emasSaatIni * 2.5 / 100;


    return $hasil;
}


function zakatFitrah($jumlah)
{
    $hargaBeras = 40000;
    $hasil = $jumlah * $hargaBeras;
    return $hasil;
}
