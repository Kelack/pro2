<?php 
// 29. Для  каждого  числа  заданной  последовательности  натуральных   чисел n0 ,n1,...,nm
// установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.

// Промежуток
$x = 175000;
$y = 180000;

// Нужная сумма
$seekSum = 40; 

// Для вывода
$counter = 0;
$conclusion = '';

for($i = $x; $i < $y; $i++)
{
    // $i = 127219;
    $number = $i;
    $count = floor(log10($number)) + 1;

    $answer = canCrossOutNumbers($number, $seekSum, $count);
    
    if($answer)
    {
        $counter++;
        $conclusion .= "В числе $number можно вычеркнуть некоторые цифры, чтобы сумма остальных равнялась $seekSum <br><br>";
    }
}

echo "<br>Промежуток от $x до $y; Количество найденых чисел  = $counter <br><br> $conclusion";



function canCrossOutNumbers($number, $seekSum, $count) 
{
    // $zeroСheck == false если в $number нету цифры 0. Если в $number есть цифра 0, то $zeroСheck == true
    $zeroСheck  = findDigitZero($number, $count);

    for($i = 0; $i < $count; $i++)
    {
        $decreasingNumber = $number;
        $goneNumbers = 0; 
        $sum = 0; 

        for($k = 0; $k < $count; $k++)
        {
            $sum += $decreasingNumber % 10;
            $goneNumbers = $goneNumbers * 10 + $decreasingNumber % 10;

            if($seekSum < $sum)
            {
                if(subtractIfSumMore($sum, $seekSum, $goneNumbers, $count))
                {
                    // echo ' - ';
                    return true;
                }

                $sum -= $decreasingNumber % 10;

                $decreasingNumber = intdiv($decreasingNumber, 10);
                continue;
            }

            if($seekSum == $sum)
            {   
                //проверка на, если в $number мы получили нужную сумму из цифр $number, остались ли какие-либо другие цифры в $number
                if(($k+1 < $count) or $zeroСheck)
                {
                    // echo '+';
                    return true;
                }
                break 2;
            }

            $decreasingNumber = intdiv($decreasingNumber, 10);
        }

        $number = numberPermutation($number, $count);
    }

    return false;
}

// Сдвиг $number на одну позицию. Пример, $number = 123, return $number = 312
function numberPermutation($number, $count)
{
    $lastNumber =  $number % 10;
    $number = intdiv($number, 10);

    for($i = 1; $i < $count; $i++)
    {
        $lastNumber *=10;
    }

    return $number + $lastNumber;
}

//проверяет, есть ли в $number цифра 0
function findDigitZero($number, $count)
{
    for($i = 0; $i < $count; $i++)
    {
        if($number % 10 == 0)
        {
            return true;
        }

        $number = intdiv($number, 10);
    }

    return false;
}

//Вычитает из $sum, цыфры из $takeSubtract, чтобы найти $seekSum
function subtractIfSumMore($sum, $seekSum, $takeSubtract, $countNumber)
{   
    $countTakeSubtract = floor(log10($takeSubtract)) + 1;

    // $zeroСheck == false если в $takeSubtract нету цифры 0. Если в $takeSubtract есть цифра 0, то $zeroСheck == true
    $zeroСheck  = findDigitZero($takeSubtract, $countTakeSubtract);

    for($i = 0; $i < $countTakeSubtract; $i++)
    {
        $decreasingNumber = $takeSubtract;
        $currentSum = $sum;

        for($k = 0; $k < $countTakeSubtract; $k++)
        {
            $currentSum -= $decreasingNumber % 10;

            if($seekSum > $currentSum)
            {
                //echo "<br>$currentSum = sum $decreasingNumber = decreasingNumber<br>";
                break;
            }

            if($seekSum == $currentSum)
            {   
                //проверка, остались ли какие-либо другие цифры в $takeSubtract
                if(($countTakeSubtract < $countNumber) or ($zeroСheck) or ($k+1 < $countTakeSubtract))
                {
                    return true;
                }
                break 2;
            }

            $decreasingNumber = intdiv($decreasingNumber, 10);
        }

        $takeSubtract = numberPermutation($takeSubtract, $countTakeSubtract);
    }

    return false;
}