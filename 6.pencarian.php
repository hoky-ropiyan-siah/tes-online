<?php


$arr = [
 ['f', 'g', 'h', 'i'],
 ['j', 'k', 'p', 'q'],
 ['r', 's', 't', 'u']
];

echo "<b>Pencarian Array dengan array_search";
echo " <pre>";
print_r($arr);
echo " </pre>";
 
$key = array_search('fghi', $arr);
echo $key."<br><br>";

$key = array_search('jkpq', $arr);
echo $key."<br><br>";

$key = array_search('rstu', $arr);
echo $key."<br><br>";
?>
