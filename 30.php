<?php 
// 30. Найти среди натуральных чисел n, n+1,...,2n1 числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.   

$x1 = 10000;
$x2 = $x1*2;

echo "Числа-близнецы на промежутке от $x1 до $x2:<br><br>";

$primeNumber1 = 0;
$primeNumber2 = 0;

for($n = $x1; $n !== $x2; $n++)
{
    if($n % 2 == 0)
    {
        continue;
    }
    
    $primeNumber1 = $primeNumber2;
    $exam = true;

    for($i = 2; $i !== $n; $i++)
    {
        if($n % $i == 0)
        {   
            $exam = false;
            break;
        }
    }

    if($exam)
    {
        $primeNumber2 = $n;
    }

    if($primeNumber2 - $primeNumber1 == 2)
    {
        echo "$primeNumber1 и $primeNumber2; <br><br>";
    }
}