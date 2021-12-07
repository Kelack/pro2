<?php 
//27. Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей.  

$m = 500;
$maxSumDivisors = 1;
$number = 0;

for($i = 2; $i <= $m; $i++)
{
    $currentSumDivisors = sumDivisors2($i);
    
    if($maxSumDivisors < $currentSumDivisors)
    {
        $maxSumDivisors = $currentSumDivisors;
        $number = $i;
    }
}

echo "number = $number; maxSumDivisors = $maxSumDivisors";

function sumDivisors2($number)
{
    $sum = 0;
    $previousDivisor = 0;

    for($k = 2; $k !== $number; $k++)
    {
        if($number % $k == 0)
        {
            if($previousDivisor*$k == $number)
            {
                break;
            }
            if(simpleNumber($k))
            {
                $sum += $k;
            }

            $previousDivisor = $k;

            if($k*$k == $number)
            {
                break;
            }
            elseif(simpleNumber($number / $k))
            {
                $sum += $number / $k;
            }
        }
        
    }

    return $sum;   
}

function simpleNumber($number)
{
    for($i = 2; $i !== $number; $i++)
    {
        if($number % $i == 0)
        {   
            return false;
        }
    }

    return true;   
}

?>