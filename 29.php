<?php 
// 29. Для  каждого  числа  заданной  последовательности  натуральных   чисел n0 ,n1,...,nm
// установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.

$seekSum = 18; // Найдет много вариантов

//число 99 не подойте. Хоть сумма = 18, в нем нечего вычеркнуть. 
for($i = 99; $i < 2000; $i++)
{
    $number = $i;
    $count = floor(log10($number)) + 1;

    $answer = canCrossOutNumbers($number, $seekSum, $count);
    
    if($answer)
    {
        echo "В числе $number можно вычеркнуть некоторые цифры, чтобы сумма остальных равнялась $seekSum <br><br>";
    }
}



function canCrossOutNumbers($number, $seekSum, $count) 
{
    //Проверка
    $examination = false;
    for($i = 0; $i < $count; $i++)
    {
        if($number % 10 == 0)
        {
            $examination = true;
            break;
        }
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
                if($k+1 != $count or $examination)
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

function numberPermutation ($number, $count)
{
    $lastNumber =  $number % 10;
    $number = intdiv($number, 10);

    for($i = 1; $i < $count; $i++)
    {
        $lastNumber *=10;
    }

    return $number + $lastNumber;
}