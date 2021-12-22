<?php 
// 29. Для  каждого  числа  заданной  последовательности  натуральных   чисел n0 ,n1,...,nm
// установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.

$seekSum = 18; // Найдет много вариантов
$counter = 0;
$conclusion = '';

//число 99 не подойдет. Хоть сумма = 18, в нем нечего вычеркнуть.
for($i = 0; $i < 2000; $i++)
{
    $number = $i;
    $count = floor(log10($number)) + 1;

    $answer = canCrossOutNumbers($number, $seekSum, $count);
    
    if($answer)
    {
        $counter++;
        $conclusion .= "В числе $number можно вычеркнуть некоторые цифры, чтобы сумма остальных равнялась $seekSum <br><br>";
    }
}

echo "Количество найденых чисел = $counter <br><br> $conclusion";



function canCrossOutNumbers($number, $seekSum, $count) 
{
    //Проверка
        // $examination == false если в $number нету цифры 0. Если в $number есть цифра 0, то $examination == true
    $examination = false;
    $examinationNumber = $number;

    for($i = 0; $i < $count; $i++)
    {
        if($examinationNumber % 10 == 0)
        {
            $examination = true;
            break;
        }

        $examinationNumber = intdiv($examinationNumber, 10);
    }

    for($i = 0; $i < $count; $i++)
    {
        $decreasingNumber = $number;
        $sum = 0; 

        for($k = 0; $k < $count; $k++)
        {
            $sum += $decreasingNumber % 10;
            $decreasingNumber = intdiv($decreasingNumber, 10);

            if($seekSum < $sum)
            {
                break;
            }

            if($seekSum == $sum)
            {   
                //проверка на, если в $number мы получили нужную сумму из цифр $number, остались ли какие-либо другие цифры в $number
                if($k+1 < $count or $examination)
                {
                    return true;
                }
                break 2;
            }
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