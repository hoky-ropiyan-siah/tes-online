<?php
$nilai = [72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86];
$nilaiTotal = array_sum($nilai);
$jumlah = count($nilai);

   

echo 'nilai rata rata =' . $nilaiTotal / $jumlah.'<br>';
echo 'nilai terbesar = '.max($nilai).'<br>';
echo 'nilai terkecil = '.min($nilai);