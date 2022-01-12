<?php 
//24. Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в шестнадцатеричной системе счисления.  ----


$n = 873;
echo $n .'<sub>10</sub><br>';

$number = $n;
$chet = 1;
$binary = 0;

while($number > 0)
{
    $binary = ($number % 2)*$chet + $binary;
    
    $chet *= 10;
    $number = intdiv($number,2);
}
echo $binary .'<sub>2</sub><br>';


$hexadecimal = '';
$number = $n;

while($number > 9)
{
    $check = $number % 16;

    switch($check)
    {
        case 10:
            $hexadecimal = 'A' .$hexadecimal;
            break;

        case 11:
            $hexadecimal = 'B' .$hexadecimal;
            break;

        case 12:
            $hexadecimal = 'C' .$hexadecimal;
            break;

        case 13:
            $hexadecimal = 'D' .$hexadecimal;
            break;
            
        case 14:
            $hexadecimal = 'E' .$hexadecimal;            
            break;

        case 15:
            $hexadecimal = 'F' .$hexadecimal;
            break;
        
        default:
            $hexadecimal = $number % 16 .$hexadecimal;
            break;
    }

    $number = intdiv($number,16);
}

echo $hexadecimal .'<sub>16</sub>';


















?>