<?php 
//24. Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в шестнадцатеричной системе счисления.  


$n = 873492;
echo $n .'<sub>10</sub><br>';

$binary = $n % 2;
$number = intdiv($n,2);


while($number > 0)
{
    $binary = $number % 2 .$binary;
    $number = intdiv($number,2);
    
}
echo $binary .'<sub>2</sub><br>';


$hexadecimal = $n % 16;
$number = intdiv($n,16);

while($number > 0)
{
    $hexadecimal = $number % 16 .$hexadecimal;
    $number = intdiv($number,16);
    
}
echo $hexadecimal .'<sub>16</sub>';


















?>