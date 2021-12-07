<?php 
//26. Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей.    
$m = 1500;
$maxSumDivisors = 1;
$number = 0;

for($i = 1; $i <= $m; $i++)
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

    for($k = 1; $k !== $number; $k++)
    {
        if($number % $k == 0)
        {
            if($previousDivisor*$k == $number)
            {
                break;
            }

            $sum += $k;
            $previousDivisor = $k;

            if($k*$k == $number)
            {
                break;
            }
            else
            {
                $sum += $number / $k;
            }
        }
        
    }

    return $sum;   
}

?>