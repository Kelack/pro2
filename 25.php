<?php 
//25. Среди заданной последовательности натуральных чисел n0 ,n1,...,nm найти сумму и количество тех чисел, которые равны сумме факториалов своих цифр.   
$m = 125000;
$sumSFDN = 0;
$numberOfAdditions = 0;

for($i = 1; $i <= $m; $i++)
{
    $sum = sumFactorialsDigitsNumber($i);
    if($sum == $i)
    {
        echo " sum = $sum <br>";
        $sumSFDN += $i;
        $numberOfAdditions ++;
    }
}

echo "sumSFDN = $sumSFDN; numberOfAdditions = $numberOfAdditions";

function sumFactorialsDigitsNumber($number)
{
    $sumFactorials = factorialNumber($number % 10);
    $number = intdiv($number, 10);

    while($number > 0)
    {
        $sumFactorials += factorialNumber($number % 10);
        $number = intdiv($number, 10);

    }

    return $sumFactorials;
}

function factorialNumber($number)
{
    if($number <=1) 
    {
        return 1;
    }

    return $number * factorialNumber($number-1); 
}

?>