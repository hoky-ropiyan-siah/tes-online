<?php
$input=$_POST["input"];

$key = array(
 'D' => '=',
 'F' => '$',
 'H' => '^',
 'K' => '#',
 'N' => '+',
 'Q' => '^',
 
 
 '$' => 'D',
 '^' => 'K',
 '#' => 'G',
 '=' => 'E',
 '+' => 'S'
);




$output = str_replace(array_keys($key), $key, $input);


echo $output;
?>

<form action="" method="post">
 <textarea name="input" cols="30" rows="8"></textarea>
 <input type="submit" value="Encrypt!" />
</form>

 